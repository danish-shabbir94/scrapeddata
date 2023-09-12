var $ = jQuery;
$(document).ready(function() {
    // Get repositories
    // This ajax call will get the repos in JSON object and then will show the list.
    $("#btn_get_repos").click(function() {
        $.ajax({
            type: "GET",
            url: "https://api.github.com/users/google/repos",
            dataType: "json",
            success: function(result) {
                for (i in result) {
                    $("#repo_list").append(
                        "<li><a href='" + result[i].html_url + "' target='_blank'>" +
                        result[i].name + "</a></li>"
                    );
                    console.log("i: " + i);
                }
                console.log(result);
            }
        });
    });

    // Get Users
    // This ajax call will get the users in JSON object and then will show the list.
    $("#btn_get_users").click(function() {
        $.ajax({
            type: "GET",
            url: "https://api.github.com/users",
            dataType: "json",
            success: function(result) {
                for (i in result) {
                    $("#user_list").append(
                        "<li><a href='" + result[i].html_url + "' target='_blank'>" +
                        result[i].login + "</a></li>"
                    );
                    console.log("i: " + i);
                }
                console.log(result);
            }
        });
    });

    // Get Organizations
    // This ajax call will get the orgs in JSON object and then will show the list.
    $("#btn_get_orgs").click(function() {
        $.ajax({
            type: "GET",
            url: "https://api.github.com/organizations",
            dataType: "json",
            success: function(result) {
                for (i in result) {
                    $("#org_list").append(
                        "<li><a href='" + result[i].url + "' target='_blank'>" +
                        result[i].login + "</a></li>"
                    );
                    console.log("i: " + i);
                }
                console.log(result);
            }
        });
    });
});