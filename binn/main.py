
# generate divs
import os
base = "gallery"

# <a data-bg="gallery/Compressed__DSC3668.JPG"><img src="gallery/Compressed__DSC3668.JPG" height="200px" width="300px" alt="" /></a>

for i in os.listdir(base):
    if not os.path.isdir(i):
        format1 = "<a data-bg=\"gallery/{}\"><img src=\"gallery/{}\" height=\"200px\" width=\"300px\" /></a>".format(
            i, i)
        print(format1)
