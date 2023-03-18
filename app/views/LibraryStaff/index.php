<div class="content">
  <?php $userStat = $data['userStat']['result'][0] ?? ''?>
    <div class="page">
        <div class="lend-book">
            <div class="usr-search">
                <form action="<?=URLROOT . '/LibraryStaff/index' ?>" method="post" id="user-search-form">
                    <input type="text" name="search" placeholder=" Search User" id="search" value="<?= $_POST['search'] ?? '' ?>" onkeyup="send()">
                    <button name='search-btn'>
                        <img src="<?= URLROOT . '/public/assets/search.png' ?>" alt="search btn">
                    </button>
                </form>
                <div id ="usr-search-list" class="usr-search-list"></div>
            </div>

            <div class="lend-book-content">
                <div class="lend-form">
                    <div class="lend-book-title">
                        <h2>LEND A BOOK</h2>
                    </div>
                    <div class="field">
                        <label for="acc1">Book Accession No 01</label>
                        <input type="text" name="acc1" id="acc1">
                    </div>
                    <div class="field">
                        <label for="acc2">Book Accession No 02</label>
                        <input type="text" name="acc2" id="acc2">
                    </div>
                    <div class="lend-confirm">
                        <button type="button" class="btn white bg-blue" onclick="openModal()">Lend</button>
                        <?php Modal::Modal(content:'Are You Sure?',confirmBtn:true); ?>
                    </div>
                </div>
                <div class="status">
                    <div>
                        <h2>USER STATISTICS</h2>
                    </div>
                    <div class="status-content">
                        <div>
                            <h4>User Name : </h4>
                            <div class="green"><?=$userStat['name'] ?? 'No User'?></div>
                        </div>
                        <div>
                            <h4>Lend Status : </h4>
                            <div class="status-dot bg-green"></div>
                        </div>
                        <div>
                            <h4 >Fine : </h4>
                            <div class="green"> Rs. <?=$userStat['fine_amount'] ?? '0.00'?></div>
                        </div>
                        <div>
                            <h4 >Books Lost : </h4>
                            <div class="red"><?=$userStat['no_of_books_lost'] ?? '-'?></div>
                        </div>
                        <div>
                            <h4>Books Damaged : </h4>
                            <div class="red"><?=$userStat['no_of_books_damaged'] ?? '-'?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recieve-book">
            <div class="recieve-book-title">
                <h2>RECIEVE A BOOK</h2>
                <div class="extend-due-date">
                    <input type="submit" name="Submit" value="Extend Due Date" class="btn bg-blue white">
                </div>
            </div>
            <div class="recieve-book-content">
                <div class="content-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Accession No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Due Date</th>
                                <th>Damaged</th>
                                <th>Recieved</th>
                            </tr>
                        </thead>

                        <tr>
                            <td>P305</td>
                            <td>Harry Poter</td>
                            <td>J.K. Rowling</td>
                            <td>Animus Kiado</td>
                            <td>12/04/2023</td>
                            <td class="check"><input type="checkbox" name="damagedcheck" id="damagedcheck"></td>
                            <td class="check"><input type="checkbox" name="recievedcheck" id="recievedcheck" checked></td>
                        </tr>
                        <tr>
                            <td>A45</td>
                            <td>Atomic Habits</td>
                            <td>James Clear</td>
                            <td>Penguin Random</td>
                            <td>21/05/2023</td>
                            <td class="check"><input type="checkbox" name="damagedcheck" id="damagedcheck"></td>
                            <td class="check"><input type="checkbox" name="recievedcheck" id="recievedcheck" checked></td>
                        </tr>
                    </table>
                </div>
                <div class="recieve-submition">
                    <div class="recieve-confirm">
                        <input type="submit" name="Submit" value="Confirm" class="btn bg-green white">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>

var modal = document.getElementById("myModal");

function closeModal(){
    modal.style.display = "none";
}
function openModal(){
    modal.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function send(){
    var user = document.getElementById('search');
    var searchDiv = document.getElementById('usr-search-list');

    fetch("<?=URLROOT . '/LibraryStaff/index'?>",{
        method:"POST",
        headers: {
            "Content-type":"application/json"
        },
        body: JSON.stringify(user.value)
    })
    .then(response => response.json())
    .then(response => {

        if(response.length > 0){
            searchDiv.innerHTML = '';
            var i = 0;
            response[0].forEach(result => {
                const searchResultDiv = document.createElement('div');
                searchResultDiv.classList.add('search-result');
                searchResultDiv.innerHTML = response[0][i]['membership_id'] + " " + response[0][i]['name'];

                searchResultDiv.addEventListener('click', () => {
                    user.value = searchResultDiv.innerText;
                    searchDiv.innerHTML = '';
                });
                window.addEventListener('click', () => {
                    searchDiv.innerHTML = '';
                });
                searchDiv.append(searchResultDiv);
                i++;
            });
        }
    })
    .catch(err => {
        searchDiv.innerHTML = '';
    });
}

</script>
