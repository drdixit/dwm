#!/usr/bin/env bash
# record-screen.sh — OBS-like CQP 16 on RX5500M

export DISPLAY=:0
export XAUTHORITY="$HOME/.Xauthority"
VAAPI_DEV=/dev/dri/renderD128

ffmpeg \
  -vaapi_device "$VAAPI_DEV" \
  -f x11grab \
  -video_size 1920x1080 \
  -framerate 30 \
  -i "$DISPLAY" \
  -vf 'format=nv12,hwupload' \
  -c:v h264_vaapi \
  -rc_mode CQP \
  -global_quality 16 \
  -an \
  "$HOME/record/screen-record.mp4"

