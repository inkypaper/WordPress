WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-14 23:20:23

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.3
- Server software: Microsoft-IIS/10.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\inetpub\wwwroot/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentytwentyone\assets\images\young-woman-in-mauve.jpg.webp
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
- source: C:\inetpub\wwwroot/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg
- destination: C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentytwentyone\assets\images\young-woman-in-mauve.jpg.webp
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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentytwentyone\assets\images\young-woman-in-mauve.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentytwentyone\assets\images\young-woman-in-mauve.jpg.webp.lossy.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg
Dimension: 892 x 1103
Output:    148964 bytes Y-U-V-All-PSNR 37.24 45.53 46.07   38.71 dB
           (1.21 bpp)
block count:  intra4:       3342  (86.49%)
              intra16:       522  (13.51%)
              skipped:         0  (0.00%)
bytes used:  header:            227  (0.2%)
             mode-partition:  12870  (8.6%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |  117938 |    1047 |     246 |     106 |  119337  (80.1%)
 intra16-coeffs:  |    7346 |     870 |     277 |     155 |    8648  (5.8%)
  chroma coeffs:  |    7597 |     181 |      49 |      28 |    7855  (5.3%)
    macroblocks:  |      96%|       3%|       1%|       0%|    3864
      quantizer:  |      28 |      20 |      16 |      16 |
   filter level:  |      18 |       5 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |  132881 |    2098 |     572 |     289 |  135840  (91.2%)

Success
Reduction: 5% (went from 153 kb to 145 kb)

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
C:\inetpub\wwwroot\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "C:\inetpub\wwwroot/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg" -o "C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentytwentyone\assets\images\young-woman-in-mauve.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\inetpub\wwwroot/wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentytwentyone\assets\images\young-woman-in-mauve.jpg.webp.lossless.webp'
File:      C:\inetpub\wwwroot/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg
Dimension: 892 x 1103
Output:    670500 bytes (5.45 bpp)
Lossless-ARGB compressed size: 670500 bytes
  * Header size: 3793 bytes, image data size: 666682
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: -328% (went from 153 kb to 655 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2495 ms, reducing file size with 5% (went from 153 kb to 145 kb)
