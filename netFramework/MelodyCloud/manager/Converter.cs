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
            var source = repository;
            var youtube = YouTube.Default;
            var vid = youtube.GetVideo(parameters[1]);

            Form1.Form.WriteLine("Convert video: " + parameters[1]);
            File.WriteAllBytes(source + vid.FullName, vid.GetBytes());

            Sound sound = new Sound(vid.Info.Title + ".mp4.mp3", vid.Info.Author, parameters[1]);

            if (!existSound(sound))
            {
                var inputFile = new MediaFile { Filename = source + vid.FullName };
                var outputFile = new MediaFile { Filename = $"{source + vid.FullName}.mp3" };

                using (var engine = new Engine())
                {
                    engine.GetMetadata(inputFile);

                    engine.Convert(inputFile, outputFile);

                    File.Delete(source + vid.FullName);
                }

                saveSoundDB(sound);
            }
            else
            {

            }
            SocketIO.sendData(SocketIO.WebSocket, "reloadSoundList", "null");
        }

        private static void saveSoundDB(Sound sound)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("full_name", sound.getFullName());
            client.SetParameter("author", sound.getAuthor());
            client.SetParameter("url", sound.getUrl());
            client.ExecuteNonQuery("INSERT INTO sounds (full_name, author, url) VALUES (@full_name, @author, @url)");
        }

        private static bool existSound(Sound sound)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("full_name", sound.getFullName());
            client.SetParameter("url", sound.getUrl());
            DataRow row = client.ExecuteQueryRow("SELECT FROM sounds WHERE full_name = @full_name OR url = @url");
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
