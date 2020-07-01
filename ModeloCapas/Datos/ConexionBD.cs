using System;
using System.Data.SqlClient;	

public static class ConexionBD
{
	static SqlConnection con;

	public static SqlConnection AbrirConexion()
	{
		con = new SqlConnection("server=SYN\\SQLEXPRESS;integrated security = true;database=HP3Tratamientos");
		try
		{
			con.Open();
			return con;
		}
		catch (Exception er)
		{
			System.Windows.Forms.MessageBox.Show("Error en la conexion");
			return null;
		}
	}

	public static void cerrarConexion() 
	{
		if (con != null) {
			con.Close();
		}
	}
}
