# Herramientas de programación III

# Consumir servicio web en C#


## Ejemplo 1:

```C#
using Newtonsoft.Json;


string url = "http://localhost/servicios/HerramientasProgramacionIII/EjemplMVC/index.php?action=servicioweb";
var request = new WebClient().DownloadString(url);
usuario m = JsonConvert.DeserializeObject<usuario>(request);

if (m.estado.Equals("1"))
{
    foreach (var i in m.usuarios)
    {
        MessageBox.Show(i.usuario);
    }
}
```
## Ejemplo 2:



```C#
string url2 = "https://jsonplaceholder.typicode.com/todos/1";
var request2 = new WebClient().DownloadString(url2);
jsonplaceholder m2 = JsonConvert.DeserializeObject<jsonplaceholder>(request2);

MessageBox.Show(m2.title);
```
