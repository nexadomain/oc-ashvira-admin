# OpenCart Ashvira UI Dashboard Theme **Installation**
Ashvira UI Dashboard can be install quickly and easily.

**_Note:_ Opencart Version above 3.x.x don't allow files overiding in some directory. Follow Part A Steps to overcome this issue.**


 Let's break the installation process into 2 parts.
##### **A.** Installation of *Disable the **Directory is not allowed to be written** (Only for version above 3.x.x)*
##### **B.** Installation of **_Ashvira UI Dashboard_**

### Part **A** - Installation of _Disable the **Directory is not allowed to be written**_
This installation only required for **Opencart** version above **_3.x.x_**, as admin directory writing is forbidden in new version of Opencart. So, you have to disable that security.
This can be done by installing module [Disable the directory is not allowed to be written](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35633) <https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35633>

You can also avoid this step, if it is done once already.

##### Step 1: Download the *[Disable the directory is not allowed to be written](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35633)*
And extract it.

##### Step 2: Login into *Admin* Section
Goto Administrative Dashboard Section `http://{your url}/admin` and login using *Admin Credential*.

##### Step 3: Goto *Installer* 
This can found in *Left Column* -> `Extension` -> `Installer`

##### Step 4: Upload *Extension*
Upload **Disable the directory is not allowed to be written** extension into **_Upload File_**. 

Note: File name should have `.ocmod.zip` extension. 

Check Progress bar and after successful installation, follow next step

##### Step 5: *Rebuild Modification Cache*
After installation, module/extension doesn't works untill you **Refresh/Rebuild Modification Cache**.

This can be done by going to **Modification** Page. *Left Column* -> `Extension` -> `Modifications`.
In this *Modification*, you will find all extension that are installed in Opencart Website.

Click **Refresh** button at right-top area. 
This will rebuild the cache and *Disable the directory* extension will start working.

Now, move to *Part B*

### Part B - Installation of _Ashvira UI Dashboard_
##### Step 1: Download the theme - *[Ashvira UI Dashboard](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=41905)*
Download the theme - *Ashvira UI Dashboard* from [Opencart Marketplace](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=41905) or [Github](https://github.com/nexadomain/oc-ashvira-admin).

Extract the downloaded files.

If downloaded from Github, there are two folders. In `dist` folder, you will find the `ashvira-admin.ocmod.zip`.

##### Step 2: Login into *Admin* Section
Goto Administrative Dashboard Section `http://{your url}/admin` and login using *Admin Credential*.

*You may be already Logged-In*

##### Step 3: Goto *Installer* 
This can found in *Left Column* -> `Extension` -> `Installer`

##### Step 4: Upload *Extension*
Upload **Ashvira UI Dashboard** extension into **_Upload File_**. 

Note: File name should have `.ocmod.zip` extension. 
Extension FileName: `ashvira-admin.ocmod.zip`

Follow Progress bar and check **Change log** tab in case of Failed Installation. If failed, try to debug the issue, then repeat *Step 4*. You can also contact us, if you failed to debug the issue. Our Support Team will be reachable at nexadomain@gmail.com . We will try our best to resolve your issue as early as possible.


##### Step 5: *Rebuild Modification Cache*
After installation, module/extension doesn't works untill you **Refresh/Rebuild Modification Cache**.

This can be done by going to **Modification** Page. *Left Column* -> `Extension` -> `Modifications`.
In this *Modification*, you will find all extension that are installed in Opencart Website.

Click **Refresh** button at right-top area. 
This will rebuild the cache and *Disable the directory* extension will start working.

#### Hurray!!! New Theme successfully installed at your Opencart Website.

*This project is still in development mode. We will more bring more feature with upcoming upgrades.*
