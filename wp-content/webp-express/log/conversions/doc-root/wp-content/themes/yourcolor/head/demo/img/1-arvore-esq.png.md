WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-16 22:18:55

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited
Destination folder does not exist. Creating folder: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/demo/img/1-arvore-esq.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img\1-arvore-esq.png.webp
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
- source: C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/demo/img/1-arvore-esq.png
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img\1-arvore-esq.png.webp
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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/demo/img/1-arvore-esq.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img\1-arvore-esq.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img\1-arvore-esq.png.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/demo/img/1-arvore-esq.png
Dimension: 1754 x 1209 (with alpha)
Output:    107344 bytes Y-U-V-All-PSNR 49.15 50.30 47.82   49.06 dB
           (0.40 bpp)
block count:  intra4:       1199  (14.34%)
              intra16:      7161  (85.66%)
              skipped:      6677  (79.87%)
bytes used:  header:            504  (0.5%)
             mode-partition:   9028  (8.4%)
             transparency:    41098 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   28673 |     621 |      90 |      58 |   29442  (27.4%)
 intra16-coeffs:  |    4466 |     257 |     189 |      65 |    4977  (4.6%)
  chroma coeffs:  |   21695 |     313 |     114 |     117 |   22239  (20.7%)
    macroblocks:  |      20%|       1%|       0%|      78%|    8360
      quantizer:  |      20 |      20 |      14 |      11 |
   filter level:  |       7 |       5 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   54834 |    1191 |     393 |     240 |   56658  (52.8%)
Lossless-alpha compressed size: 41097 bytes
  * Header size: 354 bytes, image data size: 40743
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   12

Success
Reduction: -75% (went from 60 kb to 105 kb)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/demo/img/1-arvore-esq.png" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img\1-arvore-esq.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/themes/yourcolor\head\demo\img\1-arvore-esq.png.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/yourcolor/head/demo/img/1-arvore-esq.png
Dimension: 1754 x 1209
Output:    53788 bytes (0.20 bpp)
Lossless-ARGB compressed size: 53788 bytes
  * Header size: 581 bytes, image data size: 53182
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=0
  * Palette size:   16

Success
Reduction: 12% (went from 60 kb to 53 kb)

Picking lossless
cwebp succeeded :)

Converted image in 1334 ms, reducing file size with 12% (went from 60 kb to 53 kb)
