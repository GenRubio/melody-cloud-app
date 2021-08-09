using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Sockets;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace MelodyCloud.Socket
{
    class SocketIO
    {
        public static System.Net.Sockets.Socket WebSocket = null;
        private static bool ThreadReceivData = true;
        public static void Initialize()
        {
            System.Net.Sockets.Socket socket = new System.Net.Sockets.Socket(AddressFamily.InterNetwork, SocketType.Stream, ProtocolType.Tcp);
            socket.Bind(new IPEndPoint(IPAddress.Parse("127.0.0.1"), 3300));
            socket.Listen(0);

            Form1.Form.WriteLine("Esperando conexion con el node...", "success");

            var client = socket.Accept();
            WebSocket = client;

            while (ThreadReceivData)
            {
                reciveData(client);
            }
        }

        public static void sendData(System.Net.Sockets.Socket client, string idType, string parameters)
        {
            var buffer = Encoding.UTF8.GetBytes(idType + "|" + parameters);
            client.Send(buffer, 0, buffer.Length, 0);
        }

        private static void reciveData(System.Net.Sockets.Socket client)
        {
            try
            {
                var buffer = new byte[255];
                int rec = client.Receive(buffer, 0, buffer.Length, 0);
                Array.Resize(ref buffer, rec);

                string idType = getIdType(Encoding.UTF8.GetString(buffer));
                string[] parameters = getParameters(Encoding.UTF8.GetString(buffer));
                callPackage(idType, parameters);
            }
            catch
            {
                ThreadReceivData = false;
                return;
            }
        }

        private static string getIdType(string buffer)
        {
            string[] data = buffer.Split('|');
            return data[0];
        }

        private static string[] getParameters(string buffer)
        {
            string[] data = buffer.Split('|');
            string[] parameters = data[1].Split(',');
            return parameters;
        }

        private static void callPackage( string idType, string[] parameters)
        {
            switch (idType)
            {
                case "sendSound":
                    new Thread(() => manager.Converter.getVideo(parameters)).Start();
                    break;
            }
        }
    }
}
