using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MelodyCloud.models
{
    class Sound
    {
        private int id;
        private string full_name;
        private string author;
        private string url;

        public Sound(string full_name, string author, string url)
        {
            this.full_name = full_name;
            this.author = author;
            this.url = url;
        }

        public string getFullName()
        {
            return full_name;
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
