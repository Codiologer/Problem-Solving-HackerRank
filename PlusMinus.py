#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'plusMinus' function below.
#
# The function accepts INTEGER_ARRAY arr as parameter.
#

#!/bin/python3

def plusMinus(arr):
    pos = 0
    neg = 0
    zero = 0

    for i in range(len(arr)):  
        if arr[i] > 0:
            pos += 1
        elif arr[i] < 0:  
            neg += 1
        else:
            zero += 1

    rpos = pos / len(arr)
    rneg = neg / len(arr)
    rz = zero / len(arr)

    print(f"{rpos:.6f}")
    print(f"{rneg:.6f}")
    print(f"{rz:.6f}")


if __name__ == '__main__':
    n = int(input().strip())
    arr = list(map(int, input().rstrip().split()))
    plusMinus(arr)
