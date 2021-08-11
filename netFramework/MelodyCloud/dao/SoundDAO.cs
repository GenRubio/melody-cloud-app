using MelodyCloud.models;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MelodyCloud.dao
{
    class SoundDAO
    {
        public static bool checkUser(string id, string uid)
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

        public static void saveSoundDB(Sound sound, int user_id)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("full_name", sound.getFullName());
            client.SetParameter("author", sound.getAuthor());
            client.SetParameter("url", sound.getUrl());
            client.SetParameter("slug", sound.getSlug());
            client.SetParameter("time", sound.getTime());
            client.ExecuteNonQuery("INSERT INTO sounds (full_name, author, url, slug, time) VALUES (@full_name, @author, @url, @slug, @time)");

            int sound_id = Convert.ToInt32(client.ExecuteScalar("SELECT MAX(id) FROM sounds"));
            saveUserSoundDB(sound_id, user_id);
        }

        public static void saveUserSoundDB(int sound_id, int user_id)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("user_id", user_id);
            client.SetParameter("sound_id", sound_id);
            client.ExecuteNonQuery("INSERT INTO user_sounds (user_id, sound_id) VALUES (@user_id, @sound_id)");
        }

        public static bool existSound(string inputVideo)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("url", inputVideo);
            DataRow row = client.ExecuteQueryRow("SELECT * FROM sounds WHERE url = @url");
            if (row != null)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public static Sound getSound(string inputVideo)
        {
            mysql.mysql client = new mysql.mysql();
            client.SetParameter("url", inputVideo);
            DataRow row = client.ExecuteQueryRow("SELECT * FROM sounds WHERE url = @url");
            if (row != null)
            {
                return new Sound(row);
            }
            else
            {
                return null;
            }
        }
    }
}
