# WidgetVideoBundle

##What is the purpose of this bundle

This bundles gives you access to the *Video Widget* wich allow you to display an uploaded or an embed video
 
##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

Run the following composer command :

    php composer.phar require friendsofvictoire/video-widget

###Reminder

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\VideoBundle\VictoireWidgetVideoBundle(),
            );

            return $bundles;
        }
    }
