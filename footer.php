
    <footer>
        <div>
            <p>&copy; <?php echo date('Y'); ?> JGoz Recipe Book.</p>
        </div>
    </footer>
</body>
</html>
<?php 
    file_put_contents($title.'.html', ob_get_flush());
?>