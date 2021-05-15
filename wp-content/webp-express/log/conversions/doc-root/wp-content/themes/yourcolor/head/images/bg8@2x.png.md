WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-14 23:22:38

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg8@2x.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg8@2x.png.webp
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
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg8@2x.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg8@2x.png.webp
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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg8@2x.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg8@2x.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg8@2x.png.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg8@2x.png
Dimension: 1800 x 1125 (with alpha)
Output:    19812 bytes Y-U-V-All-PSNR 93.19 69.23 73.24   75.51 dB
           (0.08 bpp)
block count:  intra4:          1  (0.01%)
              intra16:      8022  (99.99%)
              skipped:      7939  (98.95%)
bytes used:  header:             40  (0.2%)
             mode-partition:   3934  (19.9%)
             transparency:    15561 (76.5 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |       3 |       0 |       0 |       0 |       3  (0.0%)
 intra16-coeffs:  |      23 |       0 |       0 |       3 |      26  (0.1%)
  chroma coeffs:  |      62 |       0 |       0 |     127 |     189  (1.0%)
    macroblocks:  |       5%|       0%|       0%|      95%|    8023
      quantizer:  |      20 |      20 |      18 |      13 |
   filter level:  |       7 |       5 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |      88 |       0 |       0 |     130 |     218  (1.1%)
Lossless-alpha compressed size: 15560 bytes
  * Header size: 152 bytes, image data size: 15408
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   136

Success
Reduction: 54% (went from 42 kb to 19 kb)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg8@2x.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg8@2x.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\yourcolor\head\images\bg8@2x.png.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/images/bg8@2x.png
Dimension: 1800 x 1125
Output:    17082 bytes (0.07 bpp)
Lossless-ARGB compressed size: 17082 bytes
  * Header size: 155 bytes, image data size: 16902
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   256

Success
Reduction: 60% (went from 42 kb to 17 kb)

Picking lossless
cwebp succeeded :)

Converted image in 2469 ms, reducing file size with 60% (went from 42 kb to 17 kb)
