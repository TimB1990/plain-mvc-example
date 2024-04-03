<div>
    <nav class="nav-secondary">
        <ul>
            <li>Add User</li>
        </ul>
    </nav>
    <div style="padding: 1rem;">
        <table>
            <?php
            $data->each(function ($user) {
                echo '<tr>';
                echo '<td>' . $user['username'] . '</td>';
                echo '<td>' . $user['email'] . '</td>';
                echo '</tr>';
            });
            ?>
        </table>
    </div>
</div>