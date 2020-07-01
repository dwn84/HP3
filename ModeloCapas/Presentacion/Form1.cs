using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

using MaterialSkin.Controls;
using MaterialSkin;

namespace ModeloCapas
{
    public partial class Form1 : MaterialForm
    {
        public Form1()
        {
            InitializeComponent();

            var materialSkinManager = MaterialSkinManager.Instance;
            materialSkinManager.AddFormToManage(this);
            materialSkinManager.Theme = MaterialSkinManager.Themes.LIGHT;
            materialSkinManager.ColorScheme = new ColorScheme(Primary.BlueGrey800, Primary.BlueGrey900, Primary.BlueGrey500, Accent.LightBlue200, TextShade.WHITE);
        }

        private void btnGuardar_Click(object sender, EventArgs e)
        {
            Tratamientos tra = new Tratamientos(txtIdPaciente.Text, dtpAsignado.Value, txtDescripcion.Text, dtpInicio.Value, dtpFin.Value, txtObservaciones.Text);
            GestorTratamientos gt = new GestorTratamientos();
            gt.AsignarTratamiento(tra);
        }

        private void materialRaisedButton1_Click(object sender, EventArgs e)
        {
            GestorTratamientos gt = new GestorTratamientos();
            DataTable info = new DataTable();
            info.Load(gt.consultarTratamientos(txtCedula.Text));
            dataGridView1.DataSource = info;
        }
    }
}
