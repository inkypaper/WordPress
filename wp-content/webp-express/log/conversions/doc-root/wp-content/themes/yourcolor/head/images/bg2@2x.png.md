WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-14 23:22:19

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg2@2x.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg2@2x.png.webp
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
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg2@2x.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg2@2x.png.webp
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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg2@2x.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg2@2x.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg2@2x.png.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg2@2x.png
Dimension: 1800 x 1125 (with alpha)
Output:    50954 bytes Y-U-V-All-PSNR 49.26 49.38 49.62   49.34 dB
           (0.20 bpp)
block count:  intra4:       1350  (16.83%)
              intra16:      6673  (83.17%)
              skipped:      5758  (71.77%)
bytes used:  header:            307  (0.6%)
             mode-partition:   9598  (18.8%)
             transparency:     4502 (84.2 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   17202 |      72 |     169 |      95 |   17538  (34.4%)
 intra16-coeffs:  |    4996 |      49 |     131 |     180 |    5356  (10.5%)
  chroma coeffs:  |   12514 |     128 |     534 |     424 |   13600  (26.7%)
    macroblocks:  |      27%|       1%|       3%|      69%|    8023
      quantizer:  |      20 |      18 |      14 |      10 |
   filter level:  |       9 |       4 |      10 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   34712 |     249 |     834 |     699 |   36494  (71.6%)
Lossless-alpha compressed size: 4501 bytes
  * Header size: 168 bytes, image data size: 4333
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   136

Success
Reduction: 75% (went from 201 kb to 50 kb)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg2@2x.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg2@2x.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg2@2x.png.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg2@2x.png
Dimension: 1800 x 1125
Output:    80878 bytes (0.32 bpp)
Lossless-ARGB compressed size: 80878 bytes
  * Header size: 1896 bytes, image data size: 78957
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=5 transform=4 cache=9

Success
Reduction: 61% (went from 201 kb to 79 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2804 ms, reducing file size with 75% (went from 201 kb to 50 kb)
