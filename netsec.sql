-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 12:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netsec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keys`
--

CREATE TABLE `tbl_keys` (
  `videoid` char(5) NOT NULL,
  `userid` varchar(55) NOT NULL,
  `ckey` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_keys`
--

INSERT INTO `tbl_keys` (`videoid`, `userid`, `ckey`) VALUES
('AoPlY', 'thanhtruc', 'L9v3JczxHrfPYLK2lSSSbL4XATuXaEf/CBrIL+5FOKWRvHKccdRtIe4iZDEC7leyCEt9NUU6d63ns8KYqbtO0JIszjoHGl6xt/T71JsBL4Qn+aPhV2O3ehRo18kEWXivvcPM9I/h1CR2jjTIcPE3nLYV6vwa46hBfIIPcHhnlbmX/tQdiCBDKUTWtA4sHapcSmWZ+aOJsCU4GygMrTD6n3B+b9LHlx4olyCqIcBMD3cVd/AV/Tld338J4pJA3JUDXrZM91xi2dzS2qIHV2wl34IhvJz5vvkzKHf9Oe1/lQuNzyaYReK9lY04cgzC75q4gfzXu3emXdFTE5Pt2LShpMo/u+fyDAkTEIieP3rYtGTh2DU2aqv20Lnoru6z8ZeKcEAlneFFh+uiU+KwVNtVV9hDdIvgijLfDkRQxKmoZ0Zeq4r3S+PjaBzbH0ax00AWsDCxWVQwz+uafilKZFjqyavAkmWDsTfv0BaVyreabPuNu6tzZT+uG/pWbglDutlDZW5Q3L5PxYiFlX9HFxk5Y2Xc+ZhZ0f/gidYo5LtojMALtVSKl2RirBaHyQ2K6nOlLBtnhOSfFPROLNqH0qQbNIO/ib3bNJHHwciAL1Tjw+yVXRmg+5YHaIzldIosR/DTBtuwpRAfVxHeJ4klqJ/9AhHPln52PrSYjjeirfIaaVIMd2HA35k634+m9VCp9rk2nPB/SoU3lGQuD809zcyYoqu/Qyp0cnzeCk+Jj0NobN6hD/HkqjYBDbJC8se+9XsEU0hG+5XxJMJsN3kYsYz+41WFRpMTrK/JMzg8fe0LnrEKnmy4CnaKi1N93YTMHdjVXkrzrDwOebkS+XIeuNbCh8m3cb7za9PuZ6VwfdBHSxOHAxDeElm7cBcXQLNNsM4lKCNkpnwnGOXrLuq8H780hCNK3N4zACLtkq7QgtMOYUqW8gE09iPOLzo42R0qQtxyUMcHp1hcFJH1KOk94sZKgMuhd4L99rqz9UElyxviZn+EK4mjPUQvmRQIzeRUEpO7k1wr2UZEDv8WzbBWQJxaqM3puFZTBH0mKuvhzBQrRNxAGjgFdmfAzHoYRFvKRuR1rl9BZKG8CzJcXQYKFPTQRk56B3TQ+eYoYK47o0YocxS5i8i1nmQXgFPDxk9ECmEe4glFuWE5cN+k81c1eXJ74zS+r150X1oqBFeNwusfNiwY4MGcuJ2AyZ2Du23yljXMSPKEG94vPZJu8LD36/XwZvLLN2Gnu+H54gDS1t4THt1B8b+I+zGt7torjl9iegSzzYwpaRJ6mk/kIMkH6ArZcXs4ugEfxjNc9t+Qi1sLMOKCRZUJK17cVUCkI7b5Xn211fuipkgujqMIFYEfRclXeRC8Qrs='),
('c6pAJ', 'thanh', 'dbwPLLsoN91rYm2lWSyJVIWbbEocZtNoOnYODg2WjAWDUHV9rwD9MUvxLZakrGxZQzFc0UWOVMto9k9hJUJ0qJ5oTuwFgUUurJxlBBgQ0+Gh/WVauTOWe13E0gSSpCXQIEiocoKnmmLNyqSiQ3rIl9qRRsoOlLxur1LaclIC0+bZbvXeph/gpoKqKeA6wdJytsgLiY9CHWiYX6upFxBAWPq7/yNzhZJnIY9suc+s1O6TVEtfOoJkAR5yF4CVUIVK9e9LrYVuZnUZC1SUlDaMhQUJ0HEllDFnn9P/DujCXYNZClf0qNhIHSxb60eJk/QgHUludjZo+PKZaPNwhd7bkuKsuB04vEbUCy7EGieDDXCRI0trLF0sSD0kyS/elWuFmOULzKt6uLNgv0hNuH2ocx+oPbZ/oE5pnr6PO4bpjJe77VFibktyOzaomMY++rR/gEfD+9J3Y2Snbkes1H1ZtXrIxD0v54fsT8Geejjd4gsGxDw1T8KeGLGCt/7zbg14Hqdj8efpoaF9agN5h5EQ7cyGjgvpHlRX/kEARYxWmaVoPjcaqpUJ6Cos9bTq3uEimLpKL7yNaNxh6Apdh2HDhM17Q7yGs1wZoF2dgTHMxjt1zKgTE5XceGWO4oYwrki3M3oXQMHT1Kyq4LrLFJBCNsgjmnwwfCkJ9WgxyO3rt7OBqjcfiM5xw7R0BY/YBule4zr2ZgtnhJS3XUGvll++CVW5n7bTZIJfAx2yunGln9Lc6Mv+iqBTebAGKP+T8mNLgo2GJ5lOU+jbRPIyeMT5JCGdFWduVLKJO9/fK/eh7Z5c1qWxt5CdfBcYVIxORxBu558fo499Fh9lZAUw2m+Oogl/cHw9AkGZySljoq83qfi2WzQ6661HMk2LIXVNGMJzXEZ2EFC8ZXMva1S67HwzcCRgHIrkm2dZBr603ihMiGA4i5sZ6N4TgvrcYb5ZomCggdzULDHoE5BuGvxTzEeg+GlEqrT+1mOaC6PaSbSSzGVwJ8SpqwTj4zirDMCw5fPHeME1lTSRXUtQo3mnxA4+bD0mDxtejYhKV+4vkyV2cOtZ8JeYgBWHqgh7eUGoOJUJIJiEPbDpwpBGXsiTW2DUtg7ihqVAEWEc5zq4Ke5/mHDAk7S7TpfZLlOx/xvII49KKENUHts1kLBhh2eputraaVNlBFWCkVNSWXYcAWbRhAXhSYe+sZRPrRZVSobEAnevMooiIwoqtRF6Z8PaFHsn2SnBvyhMbtF8hs2WVBg2CVNGOx9dyLj69EiOnur0WdIAwdC+U2m+ct7+5QlkB3dmFjBdssH6QkDeJLVZfdoVdzBox3Ki8xWCGZ4MrrOPMz2t/RKVhQVT/jifquta2EOGBZl5qZ0='),
('jNOZy', 'admin', '7l1SHAeoy19wTpDkhDtmnh3j7r8J9lpcjQUmIcBEwdjN6H1b1CLjxBZRoavasEPJAeJP/BTXwZUcia9kx9gWrSHCxeXR3Qrdf34AsUSxoRUFB1Twr+tmV6fbFXFDqwo5vZZJVeC+UZNLctx4P6zjk51N0v49TG686+nimQL5+++5uXbu/OFZTVBD/8SWN7jrSt2MRMP3UcEmDjNcwsQLFMkY0j2xjpSA6mPFYwK2+gxXEP56BB7LacLPs3BEjCkyG8dZucxQio5BkhcTu9lt8A/w7lHjBswtynlp+a5eon/nFWV5POzv/zykHOTcY4SlyorkhNHW+Exr/3v7n95f9XP71xAakoEBbNc43/AfY0PfqiTPDdEHzDz+O4JiiUDavEKbz5BRMpQL2HjY+9hndnUx18ZSzFNQ9nFCzwQgIOWE/r4a1UibuVIXuhf+4dGjVnJRqAl0fr7SO/E+qUUA0xTo8K+nHxALF8wgpjsaHmuFbzsW8xA5vfmj8viyZkTnmfTAx3OfGah+KWGfDLHqMShwVxayws9BQFh3L8oNdB+i/kktdasaZLlfaeC3k0EOhZaInzKyCV2ySVFd3eBF54p2WzdR/9vROGHcoFhsF5vGLCi00s6/qbZgj1M84oabIFv20o3GdFOHDRwc47VLe3zGUzDwCsFRhiOju6V3QcSuD5xvNIYAYZW7pxOV2SfkDo1G4ZjOjaZGrPKZIt2L/KHmQy1+HXYxg6qvuF5Z5vkvD88a3WupluTxQFfWEVxMXaJt68qxczMOhrOFXMjQR4CbztuiwHdoYJMTVghyvs5dnuKgK9frAQGPdWdygNqFhwEKglTq2TvsoF00ufo81G9h0zRYV8s5GcpuYSBoj/bDIx9ysoZbULIajNYN0xAXFAlUqnNvTLXNQfHiRi99IfWjzYdRJ6x64CZvu17ca00woLjheOIfaQphyX1Vsq1PMe5x/a0em6P78/Cc9Dha9VMcyjxZfT/ziDE+a5bDe0/TY/ePUsYUsZCfqi6hFmxAE2/bg4sUFhGhkzjBpT6w0Y4PXMQiejR8M5TRSCZAtLnB4hsrpjb9DH10v4tlvCaPPth7GbyYXvQI+H+ijzvbKBFwvsFgklP8ptt+xoubuNyDYNkBQNnsk2Nj0u7fSSJct5DVuZpAuET3GA21rLbrFirFymTmr3rsWE87YU929GZuw1wjrnkA1P8+EzdH1HwkefhB9Kgd2H86lvhRNo97J9gnrjpS6LokDs5d451eqXkYy8YwWZp5Bq+2GQgjDRvJQF5WZ/TONqCCgqYDLKmlzpb7xa6RAeMRaD7gURf3//hQ9GBtVXVICOWrJPEBYCYStcgTMI9NvDSUTvLBxWyQ81W81Wc='),
('Lenii', 'admin', 'eFkrHzmQurQCAp6TpKjhMNlU22s6aTzfxJDB+f2bw9URmNfb1GgSPbpYTKiXE02Pxxue0tzDvkRlIPKaOZjx9tS9h5hav6oxDk17uPa9xx3jcDjYVzL/Z+nDuEXXDf4baJVrb01fzKs8nZ7GPHYPA7ZhxrxXUgOKNmw7tEfN2HDoFgT8ctBKBYnnHFNcRElbHIuFMB87ArKL3Y3s/4duRpL+Kug5rpqtlZQGCzbmJmo4W3100qjKWbSchz6/xl2V5wex/lASMvDZ15taPsb01BYzCXVIar81vp6WhHbCU4wslLLnuA2f3A+OV6vR5P2EUJRYqB89RYMRsEm89ks7CZyZU1rd20mdw3m7rgx+xCwtMqHmxrOK+Ip7e94Naic2luwUkyQnrej9372yYgUkyQPi5W3JQ4BTHqqZou4k+aGwRysi0Hwwt6eHIUoPmtIZgXVbzoKeFTacpHVbztxu9a0gHhad7hONKTm4mgk6wdG0igYsPxGlhSGeYNklxlwQp4nVC9uaghxIxlHbG27dQ7YODanRZ2UpRgIBvZdJyQf02CTQgDUmnHqpkFtBVEcikFML+bxXMj6VgIvpuqAOvllM8Kp/PXHkRbB/EYRG/wrAfoMGKeDxLcD3RFe5RjxTOpd4Ladw8OaPp+PnEm1tHgG8satLzLSo7R5ICvG3j5/yb/Fx1tZ2p/h44sOa+Hu0xNLLnrrh/7CdNK2qNV374a6SSNMne3vX6i3KG4dQ4ZrKb16OKNbbsCrcMe7DgyTv1BCzCGLuj7m9O5EeovcHrl817xLuOF68iKLUs5WMOFRE788aapOo9wpW3ERfVwbTudrnoXegyH4K73ug6aNxgbHp45a6i6gj4y/tse/nNP8NCZasziDdUSI5jKiKvHQ20sSOhn/MMeDntbkzIyQweH3+agJFHxMvMOyU0DIccXY26Cx0VQGRA6R94yaVOsX6iD0GG/pAPS+nzlUQeaMX2nK1MqOxMfM9mJO/nEbZshn6bWT1JoaVOqA4SOEqoPM9+nvfpVdfFs9WEZKcxoe1tgqVcPxcu3t24wGWRXJpipTbc1tVkzUsn3VUYmncumbJc/eY42klHeCIXIm6SDQl+JQ4wpB6YFhACrGgFBDTvSfMGmrrSRzo98QtL10JVGgtRW04AFbpuNYJp0K6G64hFS1X3uU1FVAXBnHlTYp4AUGIEWzy7hlU6VLLLN4oJgcKFvKHemyizlYjA/YbzxA6nuGfiKPthbWv9iY54WKPspvbIzEuXsJ6DvSOtkXhA0ixToV6T54F0ZY8tU7hSoXKCs10AuCQbYt93rVj655EelxFLkNDTlTT5IYCDvGLnH0h7+48ZJWETt4ydtbn31Um7kkJqF0='),
('QnLaK', 'user', 'xlQzOKAp2h8o3Zy5+Q0CwAkm6xcUVsDvPlWXUcemv6shk6xvqKgnWx4MkslYp5hFoj74ROGS78pFemBzcUJkY9jq3BTkWsJSaZ8CAW9JZp9JTz80cnClumY5Aqv3/tlIpV27Mu5D7pdcOWvN0CBFVxIKg+rwH63IVI5Q69cnNDhUa77LKQX5XUTqW2yuv5Z9BwtfCs1+wP/gl7An9uPrRjfz2+8MpqL9K2xYT6igyBqQbsFY3m1+UDhJ5UXVVVenhVlVzO7vLes/4cnmS76luGeZheUxqrLdCcMc2igXCQ8KbHYzbtbguKFoc18onJNloIXqaXeq9PjTPbpHAGkYDlqrNkRGtx3HgY8KUJmIrYoe1Fi/kzvF49ItNIsS5BjE0OdUAGD91kHRgmDox8f6+gHwyjZGlrwG7F7jfPRHkZ0shlzTG1maNE53jh0dOhOoB+KDsBH4gW53ghjxcPjrAq3KElEnO2Oelay79A+aP7sw10cjyxNFQw+kKERaXSWvtak+yLScVaAALay4hNGOrXbmwX90DHzW5Vn0YVGQUWWnwFxMj4zpfGs+pPNWUdBeBsG3lmvA6OjOg7iGBTpTz6B+6r50i3Mf81/yb7qa3vzpLNNrMoXqSrzcNeWeS9wf2zK7pRi9omqRs1qMKB4brHU90oDNOfbeQql08upNvjsqClV0M5Tubtblw/4m35bbbMPNVmmjjKDXJQfCJTEY5X+M9yFD6QuDiszD0tVyKXRzh4SdTZ70P/RzeDKj63TaUHPnNoVteo7OZ7Km/Yp8HWbujgpMfx44Yt44wQ/9NruqPhd8Q2VcEBkr5fEOqAoXOWwvVnuP0Bn+pKF3Kk1MiE32crv0zV5B46s5fdCx+6Ls8O+ZrAUmeF9pLHbYhfdwk81h1a1pneOBMcq6d6M/tjSqB48VtWhqTH10PYyDJqdwjcH/CejXZLewZsR6TlDToia8NmAsbteiIT3WTV52+/tADtcDCYK0PW1jOT9t3QjDiTcbx0wpeVOlL6t/S+HFrn7FRoSao/PR6YxhyqHrvDUmPDtN8sX1ART6K27gKQERyt2uCuv4pQ5frfHNjDztSjzTYKmgDWBYcNoor5zzYdGHFUk0/KZNOvEERjCfOwJX8u7K78zJo+PAn7SbXbQuiQX1IloOwRJf5hL9F/owAlRsRfPSMspUKkO/3fCgSPrPycysKVJ28ZjCAVftSuHusvPfQOBMZtZ5nrcB0vNu/rJXByo/Jyqj359QBWUnFpTTdFMfNHSrvH+eNkquZFnDxD2ewSCDfQMrD9UfFj2xWBRbvapT6Z1GL4eXTN1jINTbYVGoiYpdq4gxYQVPw21aUrONWBTuN5s9QvXaq4sG59pPZew='),
('rsh4u', 'thanh', 'Ii+Z1dX5r1yTB4q2yuyeKrrmvzuPYGePhGkypeV9umgaUhdH75Y3tkvseGXJ8GBTYzVDfB1oQgtQV9lu1SQIA0i5H9LRdtKsGIeuEMnjudY+6aA929jk5WZVEcgsweCRCOQ3q/XWL12RP8E9xrbf6fBF9sOg3f4gEzcC5zdRYL34F5x7cmsPWZv7+LMlgkWi6aoySF2eG1Ck2inV1YjeCbrYK83sPXoHu2GFOdjvVgUbvY/A4PGRPRBtLPcBRqdLuGush4ggpGV//voLDTvmS+/wWn818Vc9C4+5bLZGw/7h185yZWBzpRS8xzu5a6aounneZCSWjFiq8PsEKT45A7g7PXKuMcoKvGQjPNpiULV4MIXZVtATw0qucoFDVMAdFXXEK6Q3bYgEi4z9amsg3ozHET7h3x9oQcd+Ydwxm/BE1GmxxJ0e7sg6imclwypsY11/qbGlSRUR6sAUS7LOpOVbpeKIvOU8x9n8L+fHJDSvMPyUADP5fYxlEa6gFO8cBeAXlFaqQHXEI66kGxwXCWdfUN/WBqdEFRLNiYv+5fYfotCpfC7TYzzMX+cW8ordpAyplf/pnTcVMcHlQ0IAkj2MFJIS6QgUE7Iwt2FFG53/qgb0loNpd2Mt559em8fvniLYzUghcV6Z7L5c3Zy9v+OjemANCo9nCptdCG6V9hOlf1/FEomxA12+oaygRRtoiMXJT4/jtdJIjjVhsyRPis2GlizF4Zs+vs3d+Sf4uwXjRowAFvTnMMUSWox5CsHJ3vX4ce2J79NfLJpoKldrRoplOU0YJ6YnlpqHhFr730MixuLo4TH13e4bOScBz/aVJ9+tW9PdaX8iFcUOgzkF99Hvh1XqhmHIhgAosFFVYxHJhxB+n/pHTsnLRcNHpyl3CDaHS2jedeULQd3IDnwpOLtmzmEWqUT41uVjhIq+rcEaEnIr7LpsdGCgVMjEftnrY2COXmRcmfQhAo8RZpNPTxLO2Yf8d6FsPSVFREuAfklYofDGPpevy/Q0tYt5Qvxj2RAzhJvRHOkstEvR5fna1huaF9Ar0/TqS13jULyiu8xw8+OSrCf1FpYDMLUrsW+fLWZlC1jnGvKrdN/MUMfKAKsBKZsTHDDKohd4bLvZPicxzUUaNRczfSl5ljgbI5r1601ZmrQPkGxb2jOkIlrSPYnJJ97LaziFKHmZ1Sy2hBPWxFprhlhZx6rdPhkZffGb6Hnbn99oMVM/R4Y9QZlhXN49/ZF5MX/uwpePWoWQXwjL1hv/3xpDN4InOie87GjEsV2RlJm2Sg6vCqyXtsEj9HbU8spIQ4WXzOaf878apyd7zCvX3tN3/pmEu/nb38oh3Btb7syC8OV7cbqpXjzMhaXh/O0='),
('rvrJl', 'thanh', 'nqvPUVP2bUye4xfnJwe6mp22sh3t9mQUIWx2K3AKIDkQI9SczyD5/SYJob1yAv9jyDEiD22jwCPOAtcv8LLq1UYd6Xw191cqPkq+INCv86ivJ6lOMjs7VoPtvhk2+6c5rtwWq11WLDGCNZj3DQMnnECtM188on+p6vXooVjsgDLIIMQ8myRfTzSNJWnzt2cQjUNPvoIR1/LIc0oqtuSrQ3fPExOJaF8r7wF0ykwhhiRh3VTEW2S9PJHptGLyxX1IcZqAYXbmgjTpz1D49zLTEMc8bWgYsMd5A8dUg48+BSLK7LQHmf5EchmDWs+Ld5xeRUttuymbzjzebfCGpe6YkUGwVa0lEOToT3y1TsZ8HLKu26PcXAYmEUJj9m5UcgADK06n6W7IUsLk1dLlPzHbm5JL2SvASess/50giuc5zVvGmHWxQyENnHb8CVftPtysPk1arYeEA30rKUlvVt1miUcYQdS14OBHtj3jwhARUtWslr2bemfsaaCewLTqWawQGHLP6AEh6DF1sxzOxfM5sBCQHcFcPQxnI8734RoGwQ+bIY9/dbmX734ukOVcBwh9R0UOllPTa1Zm36iX6j58l16S5+tlNpy4NM4PMp4LIHPybDOZNuVu9ioAXIs6Nuh6trNtJQrX18bTGjhdv67j6bnIX36B6DFBOpPi7EZufji8sXXRkGULOp0W+d1nxg0vgzzG6LJWDIOvQpPE9yhty4P3Lh7FlS+P9WhQtu2z/GjS1fnFH4vvy2cyVrabtdG4G+TWq0VT2VCeuBKLy8qJWJLbKDvfG6DmWr3IegAdSlKh5lNuipA0xpUccsaaUGYDUkcIrmGA+bWcUm4lIeSBvUHwDRSoifpiHlp09TyhLDW680xiNMmSzcCt/r5x+pYKRL6Vd4jcExRAJGxnM812siIsBINYp4kPAj1XukNnRqm3zSXxcxBcIzRoHalyc+MtSyKCRW0sytYaSqRLZwNd1mdv0D3ZJe3nz+yQFehbczGO2MWf6CBW3SRGQGtlKa1j0pMheV/z/AiLwOPbaOm51wDVHyllBBJrF5zons4OgIjYekZxJebyV96v4Z+A5FQDJlNKrXMUQbBxlAhq5K6tYwb2D9FGjlTB4i8RCy2SaDiv7pFuqj2cWTu/qo6ZKrEOEoOcSxaz/6XNbGQ0SqPOutTs/fXvi2k+HIVH8UJnDul/7KoF0wwhRzX/2vVhy3jneSa+V3jaQnS7Ksgr3CyKCN0ry+R/wwnpg+sLW780ZkRKvsKCMfQNh3DcLAPN2midccLjtbOEDi3h0H+kZkr/JFER42t1JTxCc50PtSFrJP9TC+MNm6MuwRps/XMt72YnLWFXNeBzEUNQNOQOuffAcFP2Zv0='),
('tPY88', 'thanh', 'hrntVOsklFfVdCVnBAPzWwOv7H4GZvVXAeOJ8xP4UawOWSTJuN3IOk4pKXqL1Io3uYoIKDFbo310gNguwYKCcFGopdF2VHcuQCV2CrTVBeF0Uog/Oy6AiBSLnqVHR15qv9aJmTClocn9eS2fhuOlKQfShjobRmgCgO4d9nFMQfP7bDF9IaiOfpgEjPlHQZq6/S4kBUI5a430aXYPjA1lGg2T0IdHHwdTy8eF0mnIXXZupGruqRRX4d4e8VMfWf7Zt412TVr4Uj0S0tYz80cojflq8AUuDlBi71CF9diQ9p6eDU5iuUCIGK0I+n03EGi7QBGSrKQCFD1TRWpeEyijFk8rIeMcoxe1UGGNjnUhcKhMcnOtf1TWJJMt5/Cy1RnzeMVT09Uv8lKrxFvSOBS25MYBZEEslXHV0reECtvr6KVNWqMMSjRi6X8LAUjhNnJE9UWG9BFPHawmUB7oHoRcZmokMrbMGVPA7zN12j7sjwRjvnt5726J0dMD6zObnmMaowS5qd2PQhLAedtWqzKuaioMUmRI8tPtAXllAlg7lHJeJ1rF885TPNdekW5oOeHUQK22M9h/z2lwMhJD4np+1OBQgpCkU1W9aizZa4l67/8WuHhc/at2M6qLXL9QGQ8U9XRVofqA8CT8xNdJNbjpqUIc9FI6B8GnusUchEzJx3bL8Q4B/luHWusFs6OfNz2QeLh+qI/iky31D/0AEfWb+j2fFMaPMMto9/Yoi+gPCR6Fw3MuckIZ6YtsyC8cZQ8mitClYq+l9y3GUuIRHR/t1CMpcUl2UMFMVTz5UE8IwEqNjKWivFfPNJJo741EY9mt41jNDkawN4Bb7dYRsYriY9OReLQAYCLT6Ms4jrKZG/K0M/S8HnKISYpoQO4nh2cm91g6Tab6x7qoEgVYcmXbcID+O1iQBgrZ+u/3EYgiMBvgsl1QdA/FVVhKL9HiL/Aytzo7+SKA4S1ZC2wqHRJGDHEcDX8M+OCIDujLNqrJpfn9AYQl8XEngDU7JUlHzeWf8E8ASfoFQBOvRrzekppUbaOFqYsj25gj42fJOi6iD/iQYgt94ygKfhj4xW4Rkd9W6+XvK3oMeAgvNqrq5jOl8cKhLXgaSkTc994yjnUiC/v/+650p2sWTnN39icvob0yKuBA3a3Moc1kZLYaCKIiM4HA0kGmiJ2wQwKOvnUD1db1gk8Z7ksL6MNOj480/Ut4oDDWdlnRjCbx9nkIMPKHJqlkXx1UxOgVSpJseMDwZiWPZ/PAnUfGQL5TVdvn6AWLf0vG99P6RRGMnf4vEiOjKUs/JLfJUasLf02ZohNhwI+5UMsJ6FtoGhQp/Kp0McoafzOEJrLvlH3D5gyj7RLnY/hQAAg='),
('WJCYD', '456', 'CQ5Xyc6WpUTlkjlEQGiEW1lyjJT5P7h8HxTXOCLxn143thlKHjiUsjKuDrPqMeE55OF4BzbwPIRlbFm9rbp+qwBofZxX/XvbmvJ8TCmedIW9NLNHaGrRyPtXVU3j7wvdTIK/RRu/8eI0pXb7OATOAE+azYJMrJ8n8ZJFScEzp6pVR8Xlrz3aD3Iacg/nXf3BXox/88MjzAeWdeK5AWEB8YPsoaousgYAbKMR53VlLYEeJ7REB+XzOwXenjUScjqpb7W8hzb4UlrJwE8kisDVyslBwWnItFThR7KC1T4GJWXjMQ+9LZ5v5g+0OBQ6zPYRFb50vaJZVVr025hDDJdcmUs2SNt+//8dQFqL4sGPSasBeBwO0j6j7buyEMZI4N1ANSh16TAZvg68l02EMh7qSzloR7Yt8WIGjs3eO2YhXdlK0FS723sHe2EGOCR2bkNVUfgYFbGdj4I7AFQ7yZlZE1Zm2kqx7fye44KdDaB+oYHZULtyd5pZXS56PaNFOglXm7jJmP56asd6Jki56UpNb7XSaEDFjq6x7O6amMGgX8I0KWp4bTID8owujcdYonB1MVdyd5hKmfGqZ+f2KAzNxiLrX2h2dBUKOhPlY9fwFQWo/sXLkj2wQbxRxeMXZa7PXrxIQQbdWkLrnZfEQ683xj1xNy9hfQ67CB5980FnAqXpDWA0NHGH5F7D7geixx47VJs9v7DMMfn1x700/1O0doH6BJr1J5J6P/KAGIMwz0GQCGJX6MMxvHUE6MJMvge5aMHNa6HONYOd75rgq4DYL5q2EAGxd9nn+jw6DWETuY66JHiR685Fh4iycJ4hq79aDzxkfeCmDmtucNOhm8Hby37Mp0n+0F5x4NvMNfNbDjYIrpt/LklxcuOlPFifJXILln1YgriVjMPnL/FsjfkgDm8fxp4Qq8wZshys2oj2hkguHR2KEmybyAxLP+cM/mTckXsE64aajky6Za7e+ZzP03L4mCv3ZzCZ1oURJl64nC2RLbnlW+4YtvM6gb0HpE+GzRdjG9bAjYQyAb/tWVS4GHUqx9JaFYu6y+dH1gI2xb490B6YQkG+ay2Bh9yr1eEgFSEquEmyB+VMC4cOrPQ1Jnnh0QayMEn5RgOpbFEoDBrGwL+NM6IzqxkiOlnGAgc44ExBm/d5R3kPFkJqZd59Gp5txknZecfix3U1G5Ea0IVp3WcQbUjYqN0vqk0nHKt6KYvxZVtYW9X/WAT9i0AEUEgiXDYFNeB9teYU+W36ghFPEuJ7BfTCXzu/e+7P7ghlws6t8xVOffBcd9/4flOSi7djGpTzYwtsEAuMkLHLn6Pk6VBZLpZeJXEdck6ZclPLWtxJj76+LNiAHRVyzfYxoPVkOPU=');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_market`
--

CREATE TABLE `tbl_market` (
  `id` int(11) NOT NULL,
  `videoid` char(5) NOT NULL,
  `userid` varchar(55) NOT NULL,
  `buyedtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_market`
--

INSERT INTO `tbl_market` (`id`, `videoid`, `userid`, `buyedtime`) VALUES
(35, 'WJCYD', '456', '2023-07-17 00:00:18'),
(36, 'jNOZy', 'admin', '2023-07-17 00:01:56'),
(37, '', 'admin', '2023-07-17 00:03:49'),
(38, 'WJCYD', 'admin', '2023-07-17 00:04:59'),
(40, 'DvPhu', 'thanh', '2023-07-17 08:19:07'),
(41, 'rvrJl', 'thanh', '2023-07-17 08:23:32'),
(42, 'tPY88', 'thanh', '2023-07-17 08:24:47'),
(43, 'c6pAJ', 'thanh', '2023-07-17 08:26:24'),
(44, 'rsh4u', 'thanh', '2023-07-17 08:30:22'),
(45, 'Lenii', 'admin', '2023-07-17 08:32:00'),
(46, 'Lenii', 'thanh', '2023-07-17 08:32:44'),
(47, 'Lenii', 'thanhtruc', '2023-07-17 08:34:16'),
(48, 'jNOZy', 'thanhtruc', '2023-07-17 08:35:09'),
(49, 'WJCYD', 'thanhtruc', '2023-07-17 08:36:26'),
(50, 'c6pAJ', 'thanhtruc', '2023-07-17 08:37:41'),
(51, 'AoPlY', 'thanhtruc', '2023-07-17 08:39:34'),
(52, 'AoPlY', 'admin', '2023-07-17 08:52:14'),
(53, 'rsh4u', 'admin', '2023-07-17 08:54:40'),
(54, 'AoPlY', 'user', '2023-07-17 08:55:45'),
(55, 'QnLaK', 'user', '2023-07-17 08:56:28'),
(56, 'QnLaK', 'thanhtruc', '2023-07-17 08:57:11'),
(57, 'WJCYD', 'test ', '2023-07-17 09:38:05'),
(58, 'AoPlY', 'test ', '2023-07-17 09:38:22'),
(59, 'c6pAJ', 'admin', '2023-07-17 16:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userid` varchar(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(3000) NOT NULL,
  `email` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userid`, `username`, `password`, `email`) VALUES
('4d4B4', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin@gmail.com'),
('9QWbV', '456', 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0', '456@123.com'),
('k3BnK', 'test ', 'b70ed9b5f3ca011dbdb48423363588857e68b26d3153482a1554a9a925d6bd9d', 'tesst@tesstuser.tesstuser'),
('nj89U', 'user', '04f8996da763b7a969b1028ee3007569eaf3a635486ddab211d512c85b9df8fb', 'user@gmail.com'),
('okQ5m', 'thanhtruc', '40c7110f753a2c71e7e0ff7a97a3bb36f14f32bd9d5315a163afdc1538591c72', 'thanhtruc@tttruc.id.vn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `videoid` char(5) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `dateupload` datetime NOT NULL DEFAULT current_timestamp(),
  `userid` varchar(55) NOT NULL,
  `location` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`videoid`, `videoname`, `description`, `dateupload`, `userid`, `location`) VALUES
('AoPlY', 'admin', '', '2023-07-17 08:39:33', 'thanhtruc', '5.mp4'),
('c6pAJ', 'eqw', '', '2023-07-17 08:26:24', 'thanhtruc', 'round-robin dns.mp4'),
('DvPhu', '312', '', '2023-07-17 08:26:04', 'thanh', 'round-robin dns.mp41'),
('jNOZy', '1', 'test cbc', '2023-07-17 00:01:56', 'admin', 'Toggle Button Text with JavaScript - [HowToCodeSchool.com].mp4'),
('Lenii', '322', '', '2023-07-17 08:32:00', 'admin', '1.mp4'),
('QnLaK', 'tesstuser', '', '2023-07-17 08:56:28', 'user', 'test.mp4'),
('rsh4u', 'qqw', '', '2023-07-17 08:30:22', 'thanhtruc', '3.mp4'),
('rvrJl', 'q', '', '2023-07-17 08:23:32', 'thanhtruc', '2023-05-10 13-55-08.mp4'),
('tPY88', '33', '', '2023-07-17 08:24:47', 'thanhtruc', '2023-05-10 13-55-08 - Copy.mp4'),
('WJCYD', '456', '456', '2023-07-17 00:00:18', '456', '456.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_keys`
--
ALTER TABLE `tbl_keys`
  ADD PRIMARY KEY (`videoid`);

--
-- Indexes for table `tbl_market`
--
ALTER TABLE `tbl_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`videoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_market`
--
ALTER TABLE `tbl_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
