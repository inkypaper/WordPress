WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-18 01:38:16

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/uploads/2021/05/zombiedetectiveposter-e1621108514951.jpg
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/uploads/2021\05\zombiedetectiveposter-e1621108514951.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/uploads/2021/05/zombiedetectiveposter-e1621108514951.jpg
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/uploads/2021\05\zombiedetectiveposter-e1621108514951.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
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
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/uploads/2021/05/zombiedetectiveposter-e1621108514951.jpg" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/uploads/2021\05\zombiedetectiveposter-e1621108514951.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/uploads/2021\05\zombiedetectiveposter-e1621108514951.jpg.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/uploads/2021/05/zombiedetectiveposter-e1621108514951.jpg
Dimension: 300 x 427
Output:    21302 bytes Y-U-V-All-PSNR 37.12 41.42 40.67   38.08 dB
           (1.33 bpp)
block count:  intra4:        454  (88.50%)
              intra16:        59  (11.50%)
              skipped:         0  (0.00%)
bytes used:  header:            168  (0.8%)
             mode-partition:   2238  (10.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   14956 |      95 |      46 |      16 |   15113  (70.9%)
 intra16-coeffs:  |     493 |      93 |      85 |       5 |     676  (3.2%)
  chroma coeffs:  |    3011 |      41 |      23 |       5 |    3080  (14.5%)
    macroblocks:  |      93%|       4%|       3%|       1%|     513
      quantizer:  |      29 |      20 |      16 |      16 |
   filter level:  |      12 |       5 |      19 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   18460 |     229 |     154 |      26 |   18869  (88.6%)

Success
Reduction: 39% (went from 34 kb to 21 kb)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/uploads/2021/05/zombiedetectiveposter-e1621108514951.jpg" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/uploads/2021\05\zombiedetectiveposter-e1621108514951.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/uploads/2021\05\zombiedetectiveposter-e1621108514951.jpg.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/uploads/2021/05/zombiedetectiveposter-e1621108514951.jpg
Dimension: 300 x 427
Output:    109866 bytes (6.86 bpp)
Lossless-ARGB compressed size: 109866 bytes
  * Header size: 2879 bytes, image data size: 106962
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: -216% (went from 34 kb to 107 kb)

Picking lossy
cwebp succeeded :)

Converted image in 982 ms, reducing file size with 39% (went from 34 kb to 21 kb)
