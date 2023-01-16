/*
 1.- Validar si el usuario existe o si se debe registrar y generar un sistema de registro
 2.- Darle la vienbenida en caso de que el usuario exista
 3.- El programa debe repetirse hasta que se ingresen las 10 personas
  */

string[] userNames = new string[10]{ "mike", "", "", "", "", "", "", "", "", "" };
int arrayCurrentIndex = 1;
int tenPeople= 10;
int cont = 0;
bool userType;

Console.WriteLine("Welcome to the best restaurant in the world");

while (cont < tenPeople)
{

    Console.Write("Are you a registered user? Write true, or write false to register: ");
    userType= Convert.ToBoolean(Console.ReadLine());

    if (userType == true )
    {
        Console.Write("Hello, you are a registered user - please enter your user name: ");
        string userToSearch = Console.ReadLine();
        Console.WriteLine("The user you serched is {0}", userToSearch);
    }

}