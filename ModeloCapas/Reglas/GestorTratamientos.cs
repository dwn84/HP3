using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using System.Data.SqlClient;

namespace ModeloCapas
{

    class GestorTratamientos
    {
        SqlConnection con;

        public GestorTratamientos()
        {
            con = ConexionBD.AbrirConexion();
        }

        public void AsignarTratamiento(Tratamientos tra)
        {
            SqlCommand consulta = new SqlCommand();
            consulta.Connection = con;
            consulta.CommandText = "insert into tblTratamientos(TraIdPaciente,TraFechaAsignado,TraDescripcion,TraFechaInicio,TraFechaFin,TraObservaciones)" +
                " values(@TraIdPaciente,@TraFechaAsignado,@TraDescripcion,@TraFechaInicio,@TraFechaFin,@TraObservaciones)";
            consulta.Parameters.Add("@TraIdPaciente", System.Data.SqlDbType.VarChar).Value=tra.TraIdPaciente;
            consulta.Parameters.Add("@TraFechaAsignado", System.Data.SqlDbType.Date).Value = tra.TraFechaAsignado;
            consulta.Parameters.Add("@TraDescripcion", System.Data.SqlDbType.VarChar).Value = tra.TraDescripcion;
            consulta.Parameters.Add("@TraFechaInicio", System.Data.SqlDbType.Date).Value = tra.TraFechaInicio;
            consulta.Parameters.Add("@TraFechaFin", System.Data.SqlDbType.Date).Value = tra.TraFechaFin;
            consulta.Parameters.Add("@TraObservaciones", System.Data.SqlDbType.VarChar).Value = tra.TraObservaciones;

            try
            {
                if (consulta.ExecuteNonQuery() == 1)
                {
                    System.Windows.Forms.MessageBox.Show("Tratamiento guardado correctamente");
                }
            }
            catch (Exception er)            
            {
                System.Windows.Forms.MessageBox.Show($"Error interno: {er.Message}");
            }

        }

        public SqlDataReader consultarTratamientos(string cedulaPaciente) 
        {
            SqlCommand consulta = new SqlCommand();
            consulta.Connection = con;
            consulta.CommandText = "select * from tblTratamientos where TraIdPaciente = @idPac";
            consulta.Parameters.Add("@idPac", System.Data.SqlDbType.VarChar).Value = cedulaPaciente;
            SqlDataReader lista = consulta.ExecuteReader();
            return lista;
        }
    }
}
