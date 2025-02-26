
<!-- // echo 'Hello World!'; 
// Need ; or to end php script with question mark greater than
// echo vs print - echo print returns value (like 1)
// echo can concat things like echo 'Hello',' ', 'World
// echo needs "" for things like Joe's or \ to escape
// variables start with $ $name = 'Stephanie';
// vars can't start with a number, but can start with _
// vars can't use special chars or this (because this exists as a ref)
// vars can take current value, $y = $x wouldn't change if $x is updated later
// Can however link through a reference $y = &$x

// $firstName = 'Stephanie';

// echo 'Hello $firstName';
// ^ doesn't work
// echo "Hello $firstName";
// ^ works
// echo "Hello {$firstName}";
// ^ works and is best practice for vars, but doesn't show clear concat
// echo 'Hello ' . $firstName;
// ^ shows concat 
// can use questionmark php or question mark equal sign -->

<!DOCTYPE html>
<html>
    <body>
        <h1>
            <?php echo 'Hello World' ?>
        </h1>
        <p>My first paragraph.</p>
        <!-- Can use tags in echo '<p>' . 'How are you' . '</p> -->
    </body>
</html>
