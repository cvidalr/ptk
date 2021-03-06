=== Easy Video Player ===
Contributors: naa986
Donate link: http://easywpguide.wordpress.com/
Tags: video, wpvideo, flash, html5, iPad, iphone, ipod, mobile, playlists, embed video, flowplayer, video html5, flash player, player, video player
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.0.3
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easy Video Player allows you to embed videos into your WordPress site.

== Description ==

Easy Video Player is a user-friendly WordPress plugin to showcase your videos. You can embed both self-hosted videos or videos that are external hosted using direct links.

= Easy Video Player Features =

* Embed MP4 videos into your blog.
* Embed responsive videos for a better user experience while viewing from a mobile device.
* Embed HTML5 videos which are compatible with all major browsers.

= Easy Video Player Plugin Usage =

*Settings Configuration*

It's pretty easy to set up this plugin. Once you have installed the plugin simply navigate to the Settings menu where you will be able to configure some options. Mostly you just to need check the "Enable jQuery" option. That will allow the plugin to make use of jQuery library.

*Embedding Shortcodes for the Videos*

Now it's time to finally embed a video shortcode. To do this create a new post/page and use the following shortcode:

`[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4"]`

here, url is a shortcode parameter that you need to replace the actual URL of the video file.

*Video Autoplay*

If you want a particular video to start playing when the page loads you can set the "autoplay" option to "true":

`[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" autoplay="true"]`

*Control Size*

Many users don't care if the videos are not responsive, and therefore want to control the player size. You can easily do so by specifying a width and height for your video:

`[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" width="500" height="400"]`

*Control Player Ratio*

The player ratio is set to "0.417" by default. But you can override it by specifying a different ratio in the shortcode:

`[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" ratio="0.345"]`

For detailed documentation please visit the [Easy Video Player](http://easywpguide.wordpress.com/?p=25) plugin page


== Installation ==

1. Go to the Add New plugins screen in your WordPress Dashboard
1. Click the upload tab
1. Browse for the plugin file (easy-video-player.zip) on your computer
1. Click "Install Now" and then hit the activate button
1. Now, go to the settings menu of the plugin and follow the instructions for embedding videos.

== Frequently Asked Questions ==

= Can this plugin be used to embed videos on my WordPress blog? =

Yes.

= Are the videos embedded by this plugin playable on iOS devices? =

Yes.

= Can I autoplay a video? =

Yes.

= Can I embed responsive videos using this plugin? =

Yes.

== Screenshots ==

For screenshots please visit the [Easy Video Player](http://easywpguide.wordpress.com/?p=25) plugin page

== Upgrade Notice ==
none

== Changelog ==

= 1.0.3 =
* Easy video player is now compatible with WordPress 3.9

= 1.0.2 =
* The plugin can now automatically start playing a video
* The player can be resized using a specific width and height
* The ratio of each video can be customized

= 1.0.1 =
* First commit
