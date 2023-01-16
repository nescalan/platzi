// See https://aka.ms/new-console-template for more information
Console.Write("Enter de selected soda: ");
string caseSwitch = Console.ReadLine();

switch (caseSwitch)
{
    case "cola":
        Console.WriteLine("Cola soda - $2 US Dolar");
        break;
    case "lime":
        Console.WriteLine("Lime soda - $2 US Dolar");
        break;
    case "orange":
        Console.WriteLine("Orange soda - $2 US Dolar");
        break;
    case "apple":
        Console.WriteLine("Apple soda - $2 US Dolar");
        break;
    case "fanta":
        Console.WriteLine("Fanta soda - $2 US Dolar");
        break;
    default:
        Console.WriteLine("ERROR: You did not select a soda or you entered an incorrect value.");
        break;
}


