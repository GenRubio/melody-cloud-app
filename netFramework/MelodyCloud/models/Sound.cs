using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;

namespace MelodyCloud.models
{
    class Sound
    {
        private int id;
        private string full_name;
        private string author;
        private string url;
        private string slug;
        private string time;

        public Sound(string full_name, string author, string url, string time)
        {
            this.full_name = full_name;
            this.author = author;
            this.url = url;
            slug = setSlug(full_name);
            this.time = setTime(int.Parse(time));
        }

        public Sound (DataRow row)
        {
            id = (int)row["id"];
            full_name = (string)row["full_name"];
            author = (string)row["author"];
            url = (string)row["url"];
            slug = (string)row["slug"];
            time = (string)row["time"];
        }

        public int getId()
        {
            return id;
        }

        private string setSlug(string full_name)
        {
            return makeSlug(full_name);
        }

        public string makeSlug(string value)
        {
            value = value.ToLowerInvariant();
            var bytes = Encoding.GetEncoding("Cyrillic").GetBytes(value);
            value = Encoding.ASCII.GetString(bytes);
            value = Regex.Replace(value, @"\s", "-", RegexOptions.Compiled);
            value = Regex.Replace(value, @"[^a-z0-9\s-_]", "", RegexOptions.Compiled);
            value = value.Trim('-', '_');
            value = Regex.Replace(value, @"([-_]){2,}", "$1", RegexOptions.Compiled);

            return value;
        }
        private string setTime(int seconds)
        {
            int minutes = 0;
            while (seconds - 60 > 0)
            {
                seconds = seconds - 60;
                minutes = minutes + 1;
            }

            return minutes + ":" + seconds;
        }

        public string getTime()
        {
            return time;
        }
        public string getFullName()
        {
            return full_name;
        }

        public string getSlug()
        {
            return slug;
        }

        public string getAuthor()
        {
            return author;
        }

        public string getUrl()
        {
            return url;
        }
    }
}
