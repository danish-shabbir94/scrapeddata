<?php
/**
 * Template Name:Scarped Data
 */
get_header();
?>
<section class="main">
    <div class="container">
        <h1>Github Information</h1>

        <!-- Main List div where all the repositories list will be shown -->
        <div class="repos_div">
            <div id="repos">
                <h2>Github Repositories List</h2>
                <ul id="repo_list">
                </ul>
            </div>
            <!-- on click of this button an ajax call will be used which is in the /assets/js/main.js -->
            <button id="btn_get_repos">Get Repositories</button>
        </div>

        <!-- Main List div where all the Users list will be shown -->
        <div class="users_div">
            <div id="users">
                <h2>Github Users List</h2>
                <ul id="user_list">
                </ul>
            </div>
            <!-- on click of this button an ajax call will be used which is in the /assets/js/main.js -->
            <button id="btn_get_users">Get Users</button>
        </div>

        <!-- Main List div where all the Organisations list will be shown -->
        <div class="orgs_div">
            <div id="orgs">
                <h2>Github Organisations List</h2>
                <ul id="org_list">
                </ul>
            </div>
            <!-- on click of this button an ajax call will be used which is in the /assets/js/main.js -->
            <button id="btn_get_orgs">Get Organisations</button>
        </div>
    </div>
</section>
<?php get_footer();?>