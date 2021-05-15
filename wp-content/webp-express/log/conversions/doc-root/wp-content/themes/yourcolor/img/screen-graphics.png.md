WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-14 23:26:24

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/img/screen-graphics.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\img\screen-graphics.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/img/screen-graphics.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\img\screen-graphics.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/img/screen-graphics.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\img\screen-graphics.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\img\screen-graphics.png.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/img/screen-graphics.png
Dimension: 900 x 500 (with alpha)
Output:    3522 bytes Y-U-V-All-PSNR 54.94 60.44 62.26   56.22 dB
           (0.06 bpp)
block count:  intra4:         48  (2.63%)
              intra16:      1776  (97.37%)
              skipped:      1663  (91.17%)
bytes used:  header:             53  (1.5%)
             mode-partition:   1296  (36.8%)
             transparency:     1185 (82.9 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     608 |       4 |       3 |       0 |     615  (17.5%)
 intra16-coeffs:  |      97 |      16 |      17 |       0 |     130  (3.7%)
  chroma coeffs:  |     105 |      78 |       3 |       0 |     186  (5.3%)
    macroblocks:  |      24%|       3%|       0%|      73%|    1824
      quantizer:  |      20 |      19 |      15 |      11 |
   filter level:  |       9 |       4 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     810 |      98 |      23 |       0 |     931  (26.4%)
Lossless-alpha compressed size: 1184 bytes
  * Header size: 60 bytes, image data size: 1124
  * Precision Bits: histogram=4 transform=4 cache=0
  * Palette size:   133

Success
Reduction: 88% (went from 29 kb to 3 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/img/screen-graphics.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\img\screen-graphics.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\img\screen-graphics.png.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/img/screen-graphics.png
Dimension: 900 x 500
Output:    4940 bytes (0.09 bpp)
Lossless-ARGB compressed size: 4940 bytes
  * Header size: 418 bytes, image data size: 4497
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=7

Success
Reduction: 83% (went from 29 kb to 5 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1021 ms, reducing file size with 88% (went from 29 kb to 3 kb)
