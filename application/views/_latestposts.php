<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


{posts}
<div class="content floatLeft">
    <div id="quest" class="wheatBox bobbing">
        <div class="titleBox center" onclick='toggle({post_id})'>
            <h1 id="title">{title}</h1>
            <h3>Quest Giver: {username}</h3>
        </div>
            <hr />
        <div id='post{post_id}' class="questInfo hidden">
            <div class="desc">
                <h3>Description:</h3>
                <p>
                {content}
                </p>
            </div>
        </div>
            <hr />
            <div id="TeamCountBox" class='center'>
                Party: {team_count} / {max_team_count}
            </div>
            <div class='center'>
                <form action="/Post/comment" method="post">
                    <button class="button" onclick='openDesc({post_id})'>Read more</button>
                    <input name='postId' value='{post_id}' hidden="true" />
                    <button type='submit' class="button">Comments</button>
                    <button class="button">Join</button>
                </form>
            </div>
    </div>
</div>                                                                                                                                                      
{/posts}
