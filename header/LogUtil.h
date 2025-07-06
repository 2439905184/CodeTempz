//
// Created by xsh on 2025/5/30.
//
#include <android/log.h>
#ifndef OPENSLTEST_LOGUTIL_H
#define OPENSLTEST_LOGUTIL_H
#define LOGD(tag,...) __android_log_print(ANDROID_LOG_DEBUG, tag, __VA_ARGS__)
#define LOGE(tag,...) __android_log_print(ANDROID_LOG_ERROR, tag, __VA_ARGS__)
#endif //OPENSLTEST_LOGUTIL_H
