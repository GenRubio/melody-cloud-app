using MediaToolkit;
using MediaToolkit.Model;
using MelodyCloud.models;
using MelodyCloud.Socket;
using System;
using System.Collections.Generic;
using System.Data;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using VideoLibrary;

namespace MelodyCloud.manager
{
    class Converter
    {
        private static string repository = @"D:\LARAVEL\MelodyCloud\public\sounds\";
        public static void getVideo(string[] parameters)
        {
            string inputUserId = parameters[0];
            string inputUserUid= parameters[1];
            string inputVideo = parameters[2];
         
            if (checkUser(inputUserId, inputUserUid) == true)
            {
               
                var source = repository;
                var youtube = YouTube.Default;
                var vid = youtube.GetVideo(inputVideo);

                Form1.Form.WriteLine("Convert video: " + inputVideo);

                Sound sound = new Sound(vid.Info.Title, vid.Info.Author, inputVideo);
                File.WriteAllBytes(source + sound.getSlug() + ".mp4", vid.GetBytes());

                if (!existSound(sound))
                {
                    var inputFile = new MediaFile { Filename = $"{source + sound.getSlug()}.mp4" };
                    var outputFile = new MediaFile { Filename = $"{source + sound.getSlug()}.mp3" };

                    using (var engine = new Engine())
                    {
                        engine.GetMetadata(inputFile);

                        engine.Convert(inputFile, outputFile);

                        File.Delete(source + sound.getSlug() + ".mp4");
                    }

                    saveSoundDB(sound, int.Parse(inputUserId));
                }
                else
                {

                }
                SocketIO.sendData(SocketIO.WebSocket, "reloadSoundList", inputUserUid);
            }
            
        }

        private static bool checkUser(string id, string uid)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("id", int.Parse(id));
            client.SetParameter("uid", uid);
            DataRow row = client.ExecuteQueryRow("SELECT * FROM users WHERE id = @id AND uid = @uid");
            if (row != null)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        private static void saveSoundDB(Sound sound, int user_id)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("full_name", sound.getFullName());
            client.SetParameter("author", sound.getAuthor());
            client.SetParameter("url", sound.getUrl());
            client.SetParameter("slug", sound.getSlug());
            client.ExecuteNonQuery("INSERT INTO sounds (full_name, author, url, slug) VALUES (@full_name, @author, @url, @slug)");

            int sound_id = Convert.ToInt32(client.ExecuteScalar("SELECT MAX(id) FROM sounds"));
            saveUserSoundDB(sound_id, user_id);
        }

        private static void saveUserSoundDB(int sound_id, int user_id)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("user_id", user_id);
            client.SetParameter("sound_id", sound_id);
            client.ExecuteNonQuery("INSERT INTO user_sounds (user_id, sound_id) VALUES (@user_id, @sound_id)");
        }

        private static bool existSound(Sound sound)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("slug", sound.getSlug());
            client.SetParameter("url", sound.getUrl());
            DataRow row = client.ExecuteQueryRow("SELECT * FROM sounds WHERE slug = @slug OR url = @url");
            if (row != null)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}
