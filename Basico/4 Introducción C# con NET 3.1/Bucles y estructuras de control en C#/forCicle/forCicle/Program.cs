﻿// See https://aka.ms/new-console-template for more information

// Outer loop
for (int i = 1; i <= 2; ++i)
{
    Console.WriteLine("Outer: " + i);  // Executes 2 times

    // Inner loop
    for (int j = 1; j <= 3; j++)
    {
        Console.WriteLine(" Inner: " + j); // Executes 6 times (2 * 3)
    }
}