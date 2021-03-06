<?php

/*
 * This file is part of felpado.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace felpado;

use felpado as f;

/**
 * f/reverse($coll)
 *
 * Returns a new collection in reversed order.
 *
 * f\reverse(array(1, 2, 3));
 * => array(3, 2, 1)
 */
function reverse($coll) {
    return array_reverse(f\to_array($coll));
}
