using MediaToolkit;
using MediaToolkit.Model;
using MelodyCloud.dao;
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
            try
            {
                string inputUserId = parameters[0];
                string inputUserUid = parameters[1];
                string inputVideo = parameters[2];

                if (SoundDAO.checkUser(inputUserId, inputUserUid) == true)
                {
                    if (!SoundDAO.existSound(inputVideo))
                    {
                        var source = repository;
                        YouTube youtube = YouTube.Default;
                        YouTubeVideo vid = youtube.GetVideo(inputVideo);

                        Form1.Form.WriteLine("Audio: " + vid.Info.Title);

                        Sound sound = new Sound(vid.Info.Title, vid.Info.Author, inputVideo, Convert.ToString(vid.Info.LengthSeconds));

                        File.WriteAllBytes(source + sound.getSlug() + ".mp3", vid.GetBytes());

                        SoundDAO.saveSoundDB(sound, int.Parse(inputUserId));
                    }
                    else
                    {
                        Sound sound = SoundDAO.getSound(inputVideo);
                        SoundDAO.saveUserSoundDB(sound.getId(), int.Parse(inputUserId));
                    }
                    SocketIO.sendData(SocketIO.WebSocket, "reloadSoundList", inputUserUid);
                }
            }
            catch(Exception ex)
            {
                Form1.Form.WriteLine("Error: " + ex.Message, "error");
            }
        }
    }
}
