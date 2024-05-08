from fastapi import FastAPI, UploadFile
import os
from zipfile import ZipFile

app = FastAPI()


@app.get("/")
async def root():
    return {"message": "Hello World"}


@app.get("/mimes")
async def get_mimes():
    mimes = os.listdir("./mimes")
    return mimes


@app.get("/mimes/{mime_name}")
async def get_single_mime(mime_name: str):
    # todo strip any special chars from mime_name
    mime = ZipFile(f"./mimes/{mime_name}.mime")
    mime_files = mime.namelist()
    mime_description = mime.read(f"{mime_name}/description.txt")
    return {"mime_files": mime_files, "mime_description": mime_description}


@app.post("/mimes")
async def add_mime(mime: UploadFile):
    return mime.file.name


@app.delete("/mimes/{mime_name}")
async def delete_single_mime(mime_name: str):
    # todo strip special chars from mime_name
    os.remove(f"./mimes/{mime_name}.mime")
    return mime_name
