using MediaToolkit;
using MediaToolkit.Model;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
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

            var inputFile = new MediaFile { Filename = source + vid.FullName };
            var outputFile = new MediaFile { Filename = $"{source + vid.FullName}.mp3" };

            using (var engine = new Engine())
            {
                engine.GetMetadata(inputFile);

                engine.Convert(inputFile, outputFile);
            }
        }
    }
}
