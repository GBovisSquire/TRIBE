<?php

//This is a php file that you can run code in. Access at http://findyourtribe.townshend.com/test.php

// PHP Fundamentals Tutorial

// 1. VARIABLES AND DATA TYPES
$name = "Grace"; // String
$age = 35; // Integer
$price = 10.99; // Float
$isAdmin = true; // Boolean (true of false)

// Outputting Variables
echo "Hello, my name is $name and I am $age years old.<br>";

// 2. ARRAYS
$fruits = array("Apple", "Banana", "Cherry");
// Accessing array elements
echo "My favorite fruit is " . $fruits[1] . "<br>";

// Associative Array
$person = array("name" => "Alice", "age" => 30, "city" => "New York");
echo $person["name"] . " lives in " . $person["city"] . "<br>";

// 3. CONDITIONAL STATEMENTS
if ($age > 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// 4. LOOPS
// For Loop
for ($i = 0; $i < count($fruits); $i++) {
    echo "Fruit: " . $fruits[$i] . "<br>";
}

// While Loop
$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

// 5. FUNCTIONS
function greet($name) {
    return "Hello, $name!<br>";
}

echo greet("Alice");

// 6. FORM HANDLING
?>

<form method="post" action="">
    Enter your name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    echo "Welcome, " . $username . "!";
}
?>
