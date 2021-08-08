using MelodyCloud.Socket;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace MelodyCloud
{
    public partial class Form1 : Form
    {
        public static Form1 Form;
        public Form1()
        {
            this.FormClosing += Form1_FormClosing;
            InitializeComponent();

            Form = this;

            WriteLine("Servidor iniciado", "success");

            Thread thread = new Thread(() =>
            {
                SocketIO.Initialize();
            });
            thread.SetApartmentState(ApartmentState.STA);
            thread.Start();
        }
        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            Environment.Exit(0);
        }
        public void WriteLine(string text)
        {
            CheckForIllegalCrossThreadCalls = false;

            console.SelectionColor = Color.White;

            string output = DateTime.Now.ToString("HH:mm:ss") + " -> " + text;
            console.AppendText(Environment.NewLine + output);
        }

        public void WriteLine(string text, string status)
        {
            CheckForIllegalCrossThreadCalls = false;
            switch (status)
            {
                case "warning":
                    console.SelectionColor = Color.Yellow;
                    break;
                case "success":
                    console.SelectionColor = Color.GreenYellow;
                    break;
                case "error":
                    console.SelectionColor = Color.Red;
                    break;
                case "normal":
                    console.SelectionColor = Color.White;
                    break;
            }
            string output = DateTime.Now.ToString("HH:mm:ss") + " -> " + text;
            console.AppendText(Environment.NewLine + output);
            console.SelectionColor = Color.White;
        }
    }
}
