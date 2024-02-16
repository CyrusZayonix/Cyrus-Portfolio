<!DOCTYPE html>
<html>
<head>
    <title>Memory Game</title>
    <style>
        .gameBoard {
            display: grid;
            grid-template-columns: repeat(4, 100px);
            grid-template-rows: repeat(4, 100px);
            gap: 0;
        }
        .card {
            width: 100px;
            height: 100px;
            display: inline-block;
            background-color: #2196F3;
            color: white;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Memory Game door Cyrus</h1>
    <div class="gameBoard">
        <?php
        $cards = ['A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'E', 'E', 'F', 'F', 'G', 'G', 'H', 'H'];
        shuffle($cards);

        for ($i = 0; $i < 16; $i++) {
            echo "<div class='card' id='card_$i' data-index='$i' onclick='flipCard($i)'>Kaart $i</div>";
        }
        ?>
    </div>

    <script>
        let openCards = 0;
        let firstFlipped = -1;
        let secondFlipped = -1;
        let cards = ['A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'E', 'E', 'F', 'F', 'G', 'G', 'H', 'H'];
        shuffle(cards);

        function flipCard(index) {
            if (openCards === 2) {
                setTimeout(function () {
                    flipBack(firstFlipped);
                    flipBack(secondFlipped);
                    openCards = 0;
                }, 1000);
            }

            if (openCards === 0) {
                showCard(index);
                firstFlipped = index;
                openCards = 1;
            } else if (openCards === 1) {
                showCard(index);
                secondFlipped = index;
                openCards = 2;

                if (cards[firstFlipped] === cards[secondFlipped]) {
                    matchCards(firstFlipped, secondFlipped);
                    openCards = 0;
                }
            }
        }

        function showCard(index) {
            document.getElementById('card_' + index).innerText = cards[index];
        }

        function flipBack(index) {
            document.getElementById('card_' + index).innerText = 'Kaart ' + index;
        }

        function matchCards(index1, index2) {
            document.getElementById('card_' + index1).style.backgroundColor = "green";
            document.getElementById('card_' + index2).style.backgroundColor = "green";
        }

        function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }
    </script>
</body>
</html>
