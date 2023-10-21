<?php

$library = [
    "1984",
    "A Tale of Two Cities",
    "Crime and Punishment",
    "Moby Dick",
    "The Catcher in the Rye",
    "The Great Gatsby",
    "The Odyssey",
    "To Kill a Mockingbird",
    "Ulysses",
    "War and Peace"
];

function binarySearchBook(array $books): void {
    $low = 0;
    $high = count($books) - 1;

    echo "Think of a book from the library and keep it a secret.\n";

    while ($low <= $high) {
        $mid = intdiv($low + $high, 2);
        echo "Is the book you're thinking of: {$books[$mid]}? (Respond with 'earlier', 'later', or 'correct'): ";
        $response = trim(fgets(STDIN));

        if ($response === "correct") {
            echo "Yay! I guessed the book you were thinking of!\n";
            return;
        }

        switch ($response) {
            case "earlier":
                $high = $mid - 1;
                break;
            case "later":
                $low = $mid + 1;
                break;
            default:
                echo "Please respond with 'earlier', 'later', or 'correct'.\n";
                break;
        }
    }

    echo "Hmm, something seems off. I couldn't guess the book.\n";
}

echo "Here are the books in our library:\n";
foreach ($library as $book) {
    echo "- $book\n";
}
echo "\n";

binarySearchBook($library);

?>
