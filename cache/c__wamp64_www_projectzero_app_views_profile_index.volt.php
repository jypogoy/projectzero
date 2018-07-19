<?= $this->tag->stylesheetLink('css/home.css') ?>

<div class="ui container">
    <h1 class="ui center aligned header">
        <img class="ui small circular image" src="img/avatar/elliot.jpg">
        <p></p>
        <p>Jeffrey Pogoy</p>
    </h1>
    <div class="ui grid">
        <div class="column centered row">
            <p>
                jeffrey.pogoy · Member since July 19, 2018
            </p>
        </div>
    </div>

    <h1 class="ui large header"><i class="stack overflow icon"></i>My Projects</h1>
    <table class="ui celled striped table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>  
            <th>Joined Since</th>                              
            <th></th>
        </tr>
    </thead>
    <tbody class="myProjectListBody">
        
        <tr>
            <td>
                <strong>GPAP</strong>
                <p>A system primarily used for data encoding of manually imprinted credit card transactions. Information being recorded includes the credit card number, owner’s name, expiration date, authorization code, purchase amount and merchant details. The main client for this project is Global Payments Asia Pacific.</p>
            </td>
            <td>Collaborator · Developer</td>
            <td>July 18, 2018</td>
            <td><a href="">Leave · Deactivate</a></td>
        </tr>
    </tbody>    
</table>
</div>