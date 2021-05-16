WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-16 22:16:27

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-square-2.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-square-2.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 80
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-square-2.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-square-2.png.webp
- alpha-quality: 80
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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-square-2.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-square-2.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-square-2.png.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-square-2.png
Dimension: 1160 x 1160
Output:    3524 bytes Y-U-V-All-PSNR 61.50 63.66 58.76   61.16 dB
           (0.02 bpp)
block count:  intra4:         28  (0.53%)
              intra16:      5301  (99.47%)
              skipped:      5130  (96.27%)
bytes used:  header:             63  (1.8%)
             mode-partition:   2849  (80.8%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      83 |       0 |       0 |       0 |      83  (2.4%)
 intra16-coeffs:  |      52 |       0 |       3 |       4 |      59  (1.7%)
  chroma coeffs:  |     395 |       0 |       4 |      40 |     439  (12.5%)
    macroblocks:  |       6%|       0%|       1%|      93%|    5329
      quantizer:  |      20 |      20 |      14 |      13 |
   filter level:  |      27 |       5 |       2 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     530 |       0 |       7 |      44 |     581  (16.5%)

Success
Reduction: -5% (went from 3366 bytes to 3524 bytes)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-square-2.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-square-2.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-square-2.png.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-square-2.png
Dimension: 1160 x 1160
Output:    934 bytes (0.01 bpp)
Lossless-ARGB compressed size: 934 bytes
  * Header size: 175 bytes, image data size: 733
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   87

Success
Reduction: 72% (went from 3366 bytes to 934 bytes)

Picking lossless
cwebp succeeded :)

Converted image in 925 ms, reducing file size with 72% (went from 3366 bytes to 934 bytes)
