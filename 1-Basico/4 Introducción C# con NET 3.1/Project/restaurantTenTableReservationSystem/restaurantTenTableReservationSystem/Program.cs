/*
 1.- Validar si el usuario existe o si se debe registrar y generar un sistema de registro
 2.- Darle la vienbenida en caso de que el usuario exista
 3.- El programa debe repetirse hasta que se ingresen las 10 personas
  */

string[] userNames = new string[10]{ "", "", "", "", "", "", "", "", "", "" };
int arrayCurrentIndex = 0;
bool userType;

// Clear the Console
Console.Clear();
Console.WriteLine("Welcome to the best restaurant in the world");

while (true)
{
    if (arrayCurrentIndex == 10)
    {
        Console.WriteLine("The restaurant is full, try again next year");
        Environment.Exit(0);
    }
    {

    }
    Console.Write("Are you a registered user? Write true, or write false to register: ");
    userType= Convert.ToBoolean(Console.ReadLine());

    if (userType == true )
    {
        // Clear the Console
        Console.Clear();
        Console.Write("Hello, you are a registered user - please enter your user name: ");
        string userToSearch = Console.ReadLine();
        Console.WriteLine("The user you serched is {0}", userToSearch);

        int index = Array.IndexOf(userNames, userToSearch);
        if (index == -1)
        {
            // Clear the Console
            Console.Clear();
            Console.WriteLine("User not found, try again or regiter.");
        } else
        {
            // Clear the Console
            Console.Clear();
            Console.WriteLine("Welcome {0}, it's a pleasure to give you food", userNames[index ]);
        }
    }
    else if (userType == false )
    {
        Console.Clear();
        Console.Write("Please write and remember your username: ");
        userNames[arrayCurrentIndex] = Console.ReadLine();
        Console.WriteLine("Your user has been saved successfully \n " +
            "Your user name is: {0}.", userNames[arrayCurrentIndex]);
        arrayCurrentIndex++;
    }

}