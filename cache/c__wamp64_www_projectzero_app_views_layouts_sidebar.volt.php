<div class="ui fixed borderless small menu">
    <div class="ui fluid container grid">
        <div class="computer only row">
            <a class="header item"><img class="logo" src="img/falcon-icon.png" style="width: 32px; height: 32px; margin-right: 10px;">ProjectZero</a>
            <a class="item <?= ($this->router->getControllerName() == 'index' || $this->router->getControllerName() == '' || $this->router->getControllerName() == 'active_projects' ? 'active' : '') ?>" href="/projectzero">Home</a>
            <a class="item <?= ($this->router->getControllerName() == 'my_projects' ? 'active' : '') ?>" href="my_projects">My Projects</a>            
            
            <a class="ui dropdown item <?= ($this->router->getControllerName() == 'users' ? 'selected' : '') ?>">
                Administration
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item <?= ($this->router->getControllerName() == 'users' ? 'active' : '') ?>" onclick="window.location='users'"><i class="user icon"></i> Users</div>
                    <div class="item"><i class="modx icon"></i> Projects</div>
                    <div class="ui divider"></div>
                    <div class="item"><i class="settings icon"></i> System Settings</div>
                </div>
            </a>
            <a class="item <?= ($this->router->getControllerName() == 'about' ? 'active' : '') ?>" href="about">About</a>
            <div class="right menu">
                <a class="ui item">
                    <i class="icon bell outline"></i>
                    <div class="floating ui red label notif-label">
                        <span>12</span>
                    </div>
                </a>
                <a class="ui item">
                    <i class="icon tasks"></i>
                    <div class="floating ui orange label notif-label">
                        <span>12</span>
                    </div>
                </a>
                <a class="ui item">
                    <i class="icon mail outline"></i>
                    <div class="floating ui blue label notif-label">
                        <span>12</span>
                    </div>
                </a>
                <a class="ui dropdown item">
                    <img class="ui avatar image" src="img/avatar/elliot.jpg"><span style="padding-left: 10px;">Jeffrey Pogoy</span><i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item <?= ($this->router->getControllerName() == 'profile' ? 'active selected' : '') ?>" onclick="window.location='profile'"><i class="edit icon"></i>Edit Profile</div>
                        <div class="item <?= ($this->router->getControllerName() == 'settings' ? 'active selected' : '') ?>" onclick="window.location='settings'"><i class="settings icon"></i>Account Settings</div>
                        <div class="ui divider"></div>
                        <div class="item"><i class="sign out icon"></i>Sign out</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="tablet mobile only row">
            <a class="header item"><img class="logo" src="img/falcon-icon.png" style="width: 32px; height: 32px; margin-right: 10px;">ProjectOne</a>
            <div class="right menu">
                <a class="menu item">
                    <div class="ui basic icon toggle button">
                    <i class="content icon"></i>
                    </div>
                </a>
                </div>
                <div class="ui vertical accordion borderless fluid menu">
                <a class="active item">Home</a>
                <a class="item">About</a><a class="item">Contact</a>
                <div class="item">
                    <div class="title">Dropdown<i class="dropdown icon"></i></div>
                    <div class="content">
                        <a class="item">Action</a>
                        <a class="item">Another action</a>
                        <a class="item">Something else here</a>
                        <div class="ui divider"></div>
                        <a class="header item">Navbar header</a>
                        <a class="item">Seperated link</a>
                        <a class="item">One more seperated link</a>
                    </div>
                </div>
                <div class="ui divider"></div>
                <a class="item">Profile</a>
                <a class="item">Settings</a>
                <div class="ui divider"></div>
                <a class="item">Sign out</a>                   
            </div>
        </div>
    </div>
</div> 
<?= $this->getContent() ?>    
<div class="ui footer text-muted"><p>&copy; Copyright 2018, All rights reserved.</p></div> 