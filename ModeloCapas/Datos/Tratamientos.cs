using System;
public class Tratamientos
{
	private string traIdPaciente;
	private DateTime traFechaAsignado;
	private string traDescripcion;
	private DateTime traFechaInicio;
	private DateTime traFechaFin;
	private string traObservaciones;


	public Tratamientos(string TraIdPaciente, DateTime TraFechaAsignado, string TraDescripcion, DateTime TraFechaInicio, DateTime TraFechaFin, string TraObservaciones)
	{


		this.TraIdPaciente = TraIdPaciente;
		this.TraFechaAsignado = TraFechaAsignado;
		this.TraDescripcion = TraDescripcion;
		this.TraFechaInicio = TraFechaInicio;
		this.TraFechaFin = TraFechaFin;
		this.TraObservaciones = TraObservaciones;
	}

	public string TraIdPaciente { get => traIdPaciente; set => traIdPaciente = value; }
	public DateTime TraFechaAsignado { get => traFechaAsignado; set => traFechaAsignado = value; }
	public string TraDescripcion { get => traDescripcion; set => traDescripcion = value; }
	public DateTime TraFechaInicio { get => traFechaInicio; set => traFechaInicio = value; }
	public string TraObservaciones { get => traObservaciones; set => traObservaciones = value; }
	public DateTime TraFechaFin { get => traFechaFin; set => traFechaFin = value; }
}
