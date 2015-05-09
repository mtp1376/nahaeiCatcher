# nahaeiCatcher 
The program catches pictures from links like `goo.gl/tehuPH` and downloads them using wget. (You may change `wget.exe` in `downloader.php` file to your own operating system compatible one)

If you're using the program in the current year (till 1393), just use the command `php downloader.php`, but for updating lists, delete `out` directory's contents (not itself) and use `php main.php`, then use `php downloader.php` for downloading'em.

![alt ExampleOutput](https://raw.githubusercontent.com/mtp1376/nahaeiCatcher/master/example.png)

- The output directory is `files` folder.

## customization
Right now, it's gathering data for Mathematics & Physics major, but you can change `links.in`, and put other majors' datas in order to make it work for the others. (file format is [JSON](http://en.wikipedia.org/wiki/JSON) and easy-to-edit)

* Special thanks to @mrkalan for his contribution.
