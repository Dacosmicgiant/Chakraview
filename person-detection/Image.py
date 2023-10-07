from ultralytics import YOLO
import cv2

model = YOLO('../Yolo-Weights/yolov8x.pt')
results = model("Images/3.png", show=True)   # Image source path (relative)
cv2.waitKey(0)