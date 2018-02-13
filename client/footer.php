        </section>
        <footer>
            <p>Footer Content Goes here</p>
            <div class="ui info message">
<?php
        print_r($_SESSION);
?>
            </div>

<?php
    if(isset($_SESSION['error'])) {
        echo '<div class="ui error message">';
        echo $_SESSION['error'];
        echo '</div>';
        unset($_SESSION['error']);
    }
?>
<?php
    if(isset($_SESSION['message'])) {
        echo '<div class="ui info message">';
        echo $_SESSION['message'];
        echo '</div>';
        unset($_SESSION['message']);
    }
?>
        </footer>
    </body>
</html>
