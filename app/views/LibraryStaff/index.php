<div class="content">
    <div class="dashboard">
        <div class="lend-book">
            <div class="lend-book-title">
                <h2>LEND A BOOK</h2>
                <div class="content-title-search lend-search">
                    <input type="text" name="search" placeholder=" Search" id="search">
                    <button>
                        <img src="<?= URLROOT . '/public/assets/search.png' ?>" alt="search btn">
                    </button>
                </div>
            </div>
            <div class="lend-book-content">
                <div class="status">
                    <h4 class="books-return-stat">Lend Status : <span> Books to be returned </span></h4>
                    <h4 class="fine-stat">Fine Status : <span> Rs. 00 00 </span></h4>
                    <h4 class="lost-stat">No of Books Lost : <span> 0 </span></h4>
                    <h4 class="damaged-stat">No of Books Damaged : <span> 0 </span></h4>
                </div>
                <div class="lend-form">
                    <div class="field">
                        <label for="acc1">Accession 01</label>
                        <input type="text" name="acc1" id="acc1">
                    </div>
                    <div class="field">
                        <label for="acc2">Accession 02</label>
                        <input type="text" name="acc2" id="acc2">
                    </div>
                    <div class="field lend-confirm">
                        <input type="submit" name="Submit" value="Lend" class="submit-btn lend-confirm-btn">
                    </div>
                </div>
            </div>
        </div>
        <div class="recieve-book">
            <div class="recieve-book-title">
                <h2>RECIEVE A BOOK</h2>
                <div class="content-title-search recieve-search">
                    <input type="text" name="search" placeholder=" Search" id="search">
                    <button>
                        <img src="<?= URLROOT . '/public/assets/search.png' ?>" alt="search btn">
                    </button>
                </div>
            </div>
            <div class="recieve-book-content">
                <div class="recieve-book-content-title">
                    <div class="fine">
                        <h4>Fine Amount : </h4>
                        <div class="fine-val">
                            <img src="<?= URLROOT . '/public/assets/fine.png' ?>" class="fine-img" alt="fine img">
                            <h4> Rs. 0.00 </h4>
                        </div>

                    </div>
                    <div class="extend-due-date">
                        <input type="submit" name="Submit" value="Extend Due Date" class="submit-btn extend-btn">
                    </div>
                </div>
                <div class="recieve-book-table">
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
                            <td class="damagedcheck"><input type="checkbox" name="damagedcheck" id="damagedcheck"></td>
                            <td class="recievedcheck"><input type="checkbox" name="recievedcheck" id="recievedcheck" checked></td>
                        </tr>
                        <tr>
                            <td>A45</td>
                            <td>Atomic Habits</td>
                            <td>James Clear</td>
                            <td>Penguin Random</td>
                            <td>21/05/2023</td>
                            <td class="damagedcheck"><input type="checkbox" name="damagedcheck" id="damagedcheck"></td>
                            <td class="recievedcheck"><input type="checkbox" name="recievedcheck" id="recievedcheck" checked></td>
                        </tr>
                    </table>
                </div>
                <div class="recieve-confirm">
                    <input type="submit" name="Submit" value="Confirm" class="submit-btn recieve-btn">
                </div>
            </div>
        </div>
    </div>
</div>