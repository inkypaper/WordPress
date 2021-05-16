WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-16 22:16:31

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-three-quarters-2.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-three-quarters-2.png.webp
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
- source: C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-three-quarters-2.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-three-quarters-2.png.webp
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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-three-quarters-2.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-three-quarters-2.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-three-quarters-2.png.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-three-quarters-2.png
Dimension: 1160 x 870
Output:    3058 bytes Y-U-V-All-PSNR 59.73 62.31 57.82   59.65 dB
           (0.02 bpp)
block count:  intra4:         22  (0.55%)
              intra16:      3993  (99.45%)
              skipped:      3748  (93.35%)
bytes used:  header:             26  (0.9%)
             mode-partition:   2467  (80.7%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      52 |       0 |       6 |       0 |      58  (1.9%)
 intra16-coeffs:  |      21 |       1 |      20 |       4 |      46  (1.5%)
  chroma coeffs:  |     246 |      16 |     132 |      39 |     433  (14.2%)
    macroblocks:  |       7%|       0%|       7%|      86%|    4015
      quantizer:  |      20 |      20 |      14 |      13 |
   filter level:  |       7 |       4 |       2 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     319 |      17 |     158 |      43 |     537  (17.6%)

Success
Reduction: -13% (went from 2708 bytes to 3058 bytes)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-three-quarters-2.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-three-quarters-2.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/twentytwenty\assets\images\2020-three-quarters-2.png.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/twentytwenty/assets/images/2020-three-quarters-2.png
Dimension: 1160 x 870
Output:    798 bytes (0.01 bpp)
Lossless-ARGB compressed size: 798 bytes
  * Header size: 132 bytes, image data size: 640
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   83

Success
Reduction: 71% (went from 2708 bytes to 798 bytes)

Picking lossless
cwebp succeeded :)

Converted image in 780 ms, reducing file size with 71% (went from 2708 bytes to 798 bytes)
