# nahaeiCatcher 
The program catches pictures from links like `goo.gl/tehuPH` and downloads them using wget. (You may change `wget.exe` in `downloader.php` file to your own operation system compatible one)

If you're using the program in the current year (till 1393), just use the command `php downloader.php`, but for updating lists, delete `out` directory and use `php main.php`, then use `php downloader.php` for downloading'em.

![alt ExampleOutput](https://raw.githubusercontent.com/mtp1376/nahaeiCatcher/master/example.png)

- The output directory is `files` folder.

## customization
Right now, it's gathering data for Mathematis & Physics major, but you can change `links.in`, and put other majors' datas in order to make it work for the others. (file format is JSON and easy-to-edit)

* Special thanks to @mrkalan for his contribution.
