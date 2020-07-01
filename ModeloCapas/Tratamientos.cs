using System;

public class Tratamientos
{
	private string TraIdPaciente;
	private DateTime TraFechaAsignado;
	private string TraDescripcion;
	private DateTime TraFechaInicio;
	private DateTime TraFechaFin;
	private string TraObservaciones;


	public Tratamientos(string TraIdPaciente, DateTime TraFechaAsignado, string TraDescripcion, DateTime TraFechaInicio, DateTime TraFechaFin, string TraObservaciones)
	{

		this.TraIdPaciente1 = TraIdPaciente;
		this.TraFechaAsignado1 = TraFechaAsignado;
		this.TraDescripcion1 = TraDescripcion;
		this.TraFechaInicio1 = TraFechaInicio;
		this.TraFechaFin1 = TraFechaFin;
		this.TraObservaciones1 = TraObservaciones;
	}

    public string TraIdPaciente1 { get => TraIdPaciente; set => TraIdPaciente = value; }
    public DateTime TraFechaAsignado1 { get => TraFechaAsignado; set => TraFechaAsignado = value; }
    public string TraDescripcion1 { get => TraDescripcion; set => TraDescripcion = value; }
    public DateTime TraFechaInicio1 { get => TraFechaInicio; set => TraFechaInicio = value; }
    public DateTime TraFechaFin1 { get => TraFechaFin; set => TraFechaFin = value; }
    public string TraObservaciones1 { get => TraObservaciones; set => TraObservaciones = value; }
}
