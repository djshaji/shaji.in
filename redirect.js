redirectURLs = {
    "udh": "https://drive.google.com/drive/folders/1KA0-BKmL08sjNGXI7-VLmxY2XnxKJkDJ?usp=sharing"
}

function redirect () {
    if (location.href.search ("\\?") == -1)
        return ;

    l = location.href.split ("?")[1]
    if (l in redirectURLs)
        location.href = redirectURLs [l]
}

