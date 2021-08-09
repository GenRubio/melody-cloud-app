using System;
using System.Collections.Generic;
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

        public Sound(string full_name, string author, string url)
        {
            this.full_name = full_name;
            this.author = author;
            this.url = url;
            slug = setSlug(full_name);
        }

        private string setSlug(string full_name)
        {
            return makeSlug(full_name);
        }

        public string makeSlug(string value)
        {
            //First to lower case
            value = value.ToLowerInvariant();

            //Remove all accents
            var bytes = Encoding.GetEncoding("Cyrillic").GetBytes(value);
            value = Encoding.ASCII.GetString(bytes);

            //Replace spaces
            value = Regex.Replace(value, @"\s", "-", RegexOptions.Compiled);

            //Remove invalid chars
            value = Regex.Replace(value, @"[^a-z0-9\s-_]", "", RegexOptions.Compiled);

            //Trim dashes from end
            value = value.Trim('-', '_');

            //Replace double occurences of - or _
            value = Regex.Replace(value, @"([-_]){2,}", "$1", RegexOptions.Compiled);

            return value;
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
